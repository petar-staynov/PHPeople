<?php 
	require 'connection.php';

	if (isset($_POST['game']) && isset($_FILES['game-img']) && !empty($_FILES['game-img']['name']) && isset($_POST['game-desc']) && isset($_POST['device'])) {
		$game = $_POST['game'];
		$image = $_FILES['game-img'];
		$game_desc = $_POST['game-desc'];
		$device = $_POST['device'];

		// Image
		$allowedExtensions = array("png", "jpg", "jpeg", "gif");

		$uploadDir = __DIR__.DIRECTORY_SEPARATOR.'game-images';

	    if(!is_writable($uploadDir)) {
	        echo "<p>Несъществуваща дериктория.</p>";
	    }

	    $extension = explode('.', $image['name']);
    	$extension = strtolower(end($extension));

    	if(!in_array($extension, $allowedExtensions)) {
        	echo "<p>Форматът на файла НЕ е позволен. Използвайте: ".implode(", ", $allowedExtensions) . "</p>";
    	}

    	$uploadedFilename = md5($image['name'].mt_rand()).'.'.$extension;
    	$uploadLocation = $uploadDir.'/'.$uploadedFilename;

    	if(file_exists($uploadLocation)) {
        	echo "<p>Има съществуващ файл със същото име.</p>";
   		}

   		if(!move_uploaded_file($image['tmp_name'], $uploadLocation)) {
        	echo "<p>Файлът НЕ успя да се качи, моля опитайте по-късно.</p>";
    	}

    	$sql = 'INSERT INTO games (game_title, game_desc, game_image, device) VALUES ("'.$game.'", "'.$game_desc.'", "'.$uploadedFilename.'", "'.$device.'")';

    	if (!mysqli_query($connection, $sql)) {
    		header("Location: index.php?uploaded=0");
    	}

    	else {
    		header("Location: index.php?uploaded=1");
    	}
	}
?>
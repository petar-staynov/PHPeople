<?php 
	$title = "Admin";
	$page = "Блог";
	include_once 'posts-header.php';
?>
<?php 
	include_once 'sidebar.php';
?>
<div class="margin-help"></div>

<form class="search-post">
	<input type="text" size="40" placeholder="Търси пост" onkeyup="searchPosts(this.value)" id="search-field">
</form>
<div class="blog-container" id="blog-container">
</div>

<script>
	if(window.location.href.indexOf("page") > -1) {
       var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	    pgurl = pgurl.split("?");
	    pgurl = pgurl[1].split("=");
	    pgurl = pgurl[1];
    }

    else {
    	pgurl = 1;
    }

	function searchPosts(str) {

    	var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	            document.getElementById("blog-container").innerHTML = xmlhttp.responseText;
	        }
	    };
	    xmlhttp.open("GET", "search-posts.php?q=" + str + "&page="+pgurl, false);
	    xmlhttp.send();  
	}

	function deletePost(id) {

    	var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	            document.getElementById("blog-container").innerHTML = xmlhttp.responseText;
	        }
	    };
	    xmlhttp.open("GET", "delete-post.php?id=" + id, false);
	    xmlhttp.send();  
	}
</script>
</body>
</html>
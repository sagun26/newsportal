<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'navbar.html'; ?>
    <div class="container">
        <header class="text-center my-4">
            <h1>Good Evening</h1>
            <p id="datetime"></p>
        </header> 
        
        <section class="my-4">
            <h2>Upload News</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="newsTitle">Title:</label>
                    <input type="text" class="form-control" id="newsTitle" name="newsTitle" required>
                </div>
                <div class="form-group">
                    <label for="newsImage">Image:</label>
                    <input type="file" class="form-control-file" id="newsImage" name="newsImage" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </section>

        <section id="newsSection" class="my-4">
            <!-- News items will be displayed here -->
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

<?php
include 'view/layout/nav_2.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600);

        .form-control {
            background: transparent;
        }

        form {
            width: 320px;
            margin: 20px;
        }

        form > div {
            position: relative;
            overflow: hidden;
        }

        form input, form textarea {
            width: 100%;
            border: 2px solid gray;
            background: none;
            position: relative;
            top: 0;
            left: 0;
            z-index: 1;
            padding: 8px 12px;
            outline: 0;
        }

        form input:valid, form textarea:valid {
            background: white;
        }

        form input:focus, form textarea:focus {
            border-color: #357EBD;
        }

        form input:focus + label, form textarea:focus + label {
            background: #357EBD;
            color: white;
            font-size: 70%;
            padding: 1px 6px;
            z-index: 2;
            text-transform: uppercase;
        }

        form label {
            -webkit-transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
            transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
            position: absolute;
            color: #999;
            padding: 7px 6px;
            font-weight: normal;
        }

        form textarea {
            display: block;
            resize: vertical;
        }

        form.go-bottom input, form.go-bottom textarea {
            padding: 12px 12px 12px 12px;
        }

        form.go-bottom label {
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        form.go-bottom input:focus, form.go-bottom textarea:focus {
            padding: 4px 6px 20px 6px;
        }

        form.go-bottom input:focus + label, form.go-bottom textarea:focus + label {
            top: 100%;
            margin-top: -16px;
        }

        form.go-right label {
            border-radius: 0 5px 5px 0;
            height: 100%;
            top: 0;
            right: 100%;
            width: 100%;
            margin-right: -100%;
        }

        form.go-right input:focus + label, form.go-right textarea:focus + label {
            right: 0;
            margin-right: 0;
            width: 40%;
            padding-top: 5px;
        }
    </style>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <form role="form" class="col-md-9 go-right" method="post"  enctype="multipart/form-data">
            <h2>Edit</h2>
            <h3><?php echo $name ?></h3>
            <div class="form-group">
                <input id="id" name="id" type="text" class="form-control" value="<?php echo isset($_SESSION['id'])?$_SESSION['id']:$id ?>" required>
                <label for="id">ID</label>
                <?php
                if (isset($_SESSION['errorId'])) {
                    echo $_SESSION['errorId'];
                }
                ?>
            </div>
            <div class="form-group">
                <input id="name" name="name" type="text" class="form-control" value="<?php echo isset($_SESSION['name'])?$_SESSION['name']:$name ?>" required>
                <label for="name">Name</label>
            </div>
            <div class="form-group">
                <input id="author" name="author" type="text" class="form-control" value="<?php echo isset($_SESSION['author'])?$_SESSION['author']:$author ?>" required>
                <label for="author">Author</label>
            </div>
            <div class="form-group">
                <input id="price" name="price" type="tel" class="form-control" value="<?php echo isset($_SESSION['price'])?$_SESSION['price']:$price ?>" required>
                <label for="price">Price</label>
            </div>
            <div class="form-group">
                <input id="producer" name="producer" class="form-control" value="<?php echo isset($_SESSION['producer'])?$_SESSION['producer']:$producer ?>" required>
                <label for="producer">Producer</label>
            </div>
            <div class="form-group">
                <input id="category ID" name="category_id" type="text" class="form-control" value="<?php echo isset($_SESSION['category_id'])?$_SESSION['category_id']:$categoryId ?>" required>
                <label for="category ID">Category ID</label>
                <?php
                if (isset($_SESSION['errorCategoryId'])) {
                    echo $_SESSION['errorCategoryId'];
                }
                ?>
            </div>
            <div class="form-group">
                <input id="amount" name="amount" type="text" class="form-control" value="<?php echo isset($_SESSION['amount'])?$_SESSION['amount']:$amount ?>" required>
                <label for="amount">Amount</label>
            </div>
            <div class="form-group">
                <input id="img" name="image" type="file" class="form-control" required>
                <label for="img">Image</label>
                <?php
                if (isset($_SESSION['checkImage']) && isset($_SESSION['imageName']) && isset($_SESSION['imageById']) && $_SESSION['checkImage'] != "Lỗi: Image is empty" && ($_SESSION['checkImage'] != 'Upload file thành công' && ($_SESSION['checkImage'] != 'Lỗi : File đã tồn tại.' || $_SESSION['imageName'] != $_SESSION['imageById']))) {
                    echo $_SESSION['checkImage'];
                }
                ?>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Confirm</button>
            <a class="btn btn-default btn-sm" href="index.php?pages=book">Cancel</a>
        </form>
    </div>
</div>
<?php
unset($_SESSION['errorId']);
unset($_SESSION['errorCategoryId']);
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['author']);
unset($_SESSION['price']);
unset($_SESSION['producer']);
unset($_SESSION['category_id']);
unset($_SESSION['amount']);
unset($_SESSION['checkImage']);
unset($_SESSION['imageName']);
?>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>

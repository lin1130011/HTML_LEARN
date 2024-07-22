<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

    </style>
</head>

<body>
    <div class="w-50 m-auto">
        <form action="../../api/store.php" method="post" class="w-100">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">name:</label>
                <input type="text" class="form-control" id="" name="name">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">mobile:</label>
                <input type="text" class="form-control" id="" name="mobile">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-lg btn-block btn-primary">新增</button>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- js or jqery -->
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "get",
                url: "url",
                data: "data",
                dataType: "json",
                success: function(response) {}
            });

        });
        // jquery end
    </script>
</body>

</html>
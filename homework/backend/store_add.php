<div class="container">
    <h1 class="text-center mt-5 mb-5">新增商品</h1>
    <form action="./api/banner_add.php" method="post" enctype="multipart/form-data">
        <table class="table text-center">
            <thead>
                <th>需要上傳的圖片</th>
                <th>圖片文字</th>
            </thead>
            <tbody>
                <td>
                    <input type="file" name="img" id="">
                </td>
                <td>
                    <input type="text" name="text" id="">
                </td>
            </tbody>
        </table>
        <div class="text-center mt-5">
            <button type="submit" class="btn btn-primary">新增</button>
        </div>
    </form>
</div>
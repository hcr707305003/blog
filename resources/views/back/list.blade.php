<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="utf-8"> 
    <title>使用bootstrap的表格实例</title> 
    <meta name="description" content="Creating a table with Bootstrap. Learn how to use Bootstrap toolkit to create Tables with examples.">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link href="{{ URL::asset('back/winui/css/winui.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div class="container">  
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr class="bg-primary">
                    <th>Student-ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Grade</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Rammohan </td>
                    <td>Reddy</td>
                    <td>A+</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">编辑</button>
                        <button type="button" class="btn btn-danger btn-sm">删除</button>
                    </td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Smita</td>
                    <td>Pallod</td>
                    <td>A</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">编辑</button>
                        <button type="button" class="btn btn-danger btn-sm">删除</button>
                    </td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Rabindranath</td>
                    <td>Sen</td>
                    <td>A+</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">编辑</button>
                        <button type="button" class="btn btn-danger btn-sm">删除</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>    
</body>
</html>
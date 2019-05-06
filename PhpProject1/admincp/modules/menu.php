<head>
<div class="menu">
    <style type="text/css">
        #header li{
            float: left;
            padding: 5px 10px;
            border: solid 1px blue;
            background: blue;
            list-style: none;
        }
        #header{
            overflow: hidden;
        }
        #header li a{
            color: #fff;
            text-decoration: none;
        }
        #header div{
            float: right;
            width: 250px;
            line-height: 50px;
        }
        #header ul{
            width: 900px;
            float: left;
            height: 90px;
        }
        body{
            background: #acacac;
            padding: 0px;
        }
        element.style {
            width: 1500px;
        }
        #container{
            overflow: hidden;
            background: #fff;
        }
        #content{
            border-top: solid 1px #ddd;
            min-height: 600px;
            padding: 10px 30px;
            width: 1500px;

        }
        .button{
            display: inline-block;
            padding: 5px 10px;
            background: blue;
            color: #fff;
            text-decoration: none;
        }
        .pagination a{
            display: inline-block;
            padding: 3px 5px;
            background: blue;
            color: #fff;
            text-decoration: none;
            margin-top: 10px;
        }
    </style>
</div>
</head>
<body>
    <div id="container">
        <div id="header">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?quanli=quanliloaisp&ac=them">Quản lí loại sản phẩm</a></li>
                <li><a href="index.php?quanli=quanlichitietsp&ac=them">Quản lí chi tiết sản phẩm</a></li>
                <li><a href="index.php?quanli=quanlimember&ac=them">Quản lí thành viên </a></li>
                <li><a href="index.php?quanli=quanliorder&ac=them">Quản lí đơn hàng</a></li>
            </ul>
        </div>
    </div>
</body>


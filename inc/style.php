<style>

body{
    background: rgba(220, 212, 223, 0.466);
    
}
body h1{
    color: violet;
    width: 100%;
    height:50px;
    margin-top: 5px;
    text-align: center;
}
h3{
    text-align: center;
    color: black;
}
.container{
    max-width: 900px;
    height: 480px;
    margin: auto;
    display: flex;
}
.mainleft{
    border-right: 1px dotted #999;
   width: 350px;
    margin-right: 50px;
}
.marginright{
    width: 450px;
    margin: 50px;
}
.tblone{
    width: 100%;
    border: 1px solid #fff;
    font-size: 17px;
}
.tblone td{
    padding: 5px 10px;
    text-align: center;
}

table.tblone tr:nth-child(2n+1){
    background: #fff;
    height: 30px;
}
table.tblone tr:nth-child(2n){
    background: #fdf0f1 none repeat scroll 0 0;
    height: 30px;
}
table tr td{
    font-size: 17px;
}
input[type="text"]{
    border: 1px solid #ddd;
    margin-bottom: 5px;
    padding: 5px;
    width: 228px;
    font-size: 16px;
    border: 2px double #e9c8cb;
    border-radius: 10px;
}
input[type="submit"]{
    cursor: pointer;
    font-size: 16px;
    padding: 5px 10px;
    border: 2px solid #e9c8cb;
   border-radius: 12px;
}
input[type="submit"]:hover{
    background: #fdf0f1;
}
.insert{
    color: #06960e;
    font-weight: bold;
}
.delete{
    color: #de5a24;
    font-weight: bold;
}
.content{
    background: #f2f3ff;
    border: 6px solid #3399ff;
    font-size: 16px;
    line-height: 22px;
    margin-bottom: 3px;
}
.subject{
    border-bottom: 1px solid #3399ff;
    font-size: 20px;
    margin-bottom: 10px;
    padding-bottom: 10px;
}
.subject p{
    margin: 0;
}
@media screen and (max-width: 850px){
    .container{
        display: block;
    }
    .mainleft{
        border: none;
        border-bottom: 2px dotted #e9c8cb;
        width: 100%;
        margin-top: 15px;
        margin: auto;
    }
    .marginright{
        margin-top: 20px;
    }
}
</style>
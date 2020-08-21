<style>
.scroll{
position:fixed;
top:80%;
right:0;
width:80px;
height:80px;
display:block;
background:#000;
text-align:center;
line-height:80px;
color:#fff;
font-sixe:20px;
text-decoration:none;
z-index:10000;
}
.scroll.top
{
	top:calc(80% - 80px);
	background:#bc3232;
}
.scroll.bottom
{
	bootom:calc(80% - 0px);
	background:#E27D60;
}
</style>
<body>

<a href="#" class="scroll top">TOP</a>
<a href="#finish" class="scroll bottom">Bottom</a>
</body>
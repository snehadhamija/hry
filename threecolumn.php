<style>
.col-sm-4 {
  width: 25%;
}
.sub-menu {
  display:none;
  position: absolute;
  left: 100%;
  top: 0px;
  width: 320px;
}
.vertical-nav li, .sub-menu li {
  list-style:none;
  position: relative;
}
.vertical-nav li:hover .sub-menu{
  display: block;
}
.column {
  float:left;
  padding: 0px;
  width: 100px;
}
.title {
 padding-bottom: 10px;
}
</style>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <ul class="vertical-nav">
        <li><a href="">Link 1</a></li>
        <li><a href="">Link 2</a>
            <div class='sub-menu'>
          <ul class="column">
              <li class='title'>Style</li>
              <li><a href="#">Sub Link 1</a></li>
              <li><a href="#">Sub Link 2</a></li>
            </ul>
             <ul class='column'>
              <li class='title'>Subject</li>
              <li><a href="#">Sub Link 3</a></li>
              <li><a href="#">Sub Link 4</a></li>
            </ul>
             <ul class='column'>
              <li class='title'>Medium</li>
              <li><a href="#">Sub Link 5</a></li>
              <li><a href="#">Sub Link 6</a></li>
          </ul>
            </div>
        </li>
      </ul>
    </div>
  </div>
</div>
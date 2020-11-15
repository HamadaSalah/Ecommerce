<div class="categ">
    <div class="container">
      <div class="row">
        <div class="cat_bar">
          <img src="{{asset('front/images/bar.png')}}">
          <h1>CATEGORIES</h1>
        </div>
        <div class="search_bar">
          <div class="body_search">
            <i class="fa fa-search"></i>
            <input type="text" name="search" placeholder="Search....">
          </div>
        </div>
        <div class="clearfix visible-sm visible-xs"></div>
        <div class="basket">
          <img src="{{asset('front/images/market.png')}}">
        </div>
        <div class="items">
        <h1><a href="{{route('cart.index')}}">{{cart()}} item(s)</a></h1>
        </div>
      </div>
    </div>
  </div>

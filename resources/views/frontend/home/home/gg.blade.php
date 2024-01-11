
<div class="container">
    <div class="btn-group mt-3 col-md-4">
        <h3  class="btn btn-danger" data-target="#friendCollapse">Hello Bangladesh </h3>
        <h3 type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" onclick="toggleFriendCollapse()" aria-expanded="false">
            <span class="visually-hidden"></span>
        </h3>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
        </ul>
    </div>
</div>

<div id="friendCollapse" class="collapse">
    <div class="card-body wow fadeInLeft" style="padding: 20px; font-size: 16px; color: #666; background-color: #d1ecf1">
        <section id="features">
            @foreach($maps as $map)
                <h3 class="mt-2 ml-3 mb-2">{{$map->title}}</h3>
                <div class="">
                    <div id="googleMap" class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{asset($map->link)}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
</div>

<script>
    function toggleFriendCollapse() {
        var friendCollapse = document.getElementById('friendCollapse');
        friendCollapse.classList.toggle('show');
    }
</script>

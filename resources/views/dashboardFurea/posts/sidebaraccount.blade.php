<div class="account__left--sidebar">
    <h3 class="account__content--title mb-20">My Profile</h3>
    <ul class="account__menu">
        <li class="account__menu--list {{ request()->is('myaccount') ? 'active' : '' }}"><a
                href="/myaccount">Dashboard</a></li>
        <li class="account__menu--list {{ request()->is('address') ? 'active' : '' }}"><a href="/address">Addresses</a>
        </li>
        <li class="account__menu--list {{ request()->is('myprofile') ? 'active' : '' }}"><a href="/myprofile">My
                Profile</a></li>
        <li class="account__menu--list {{ request()->is('wishlist') ? 'active' : '' }}"><a href="/wishlist">Wishlist</a>
        </li>

        <form method="POST" action="/logout">

            @csrf


            <button class="btn btn-danger btn-block mb-2"" id="logout" type="submit">Logout</button>
        </form>
    </ul>
</div>

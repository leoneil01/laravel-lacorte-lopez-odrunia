<div class="sidebar">
    <div class="user">
        <img class="user-img" src="{{ asset('images/defaultProfile.png') }}" alt="user-profile-img">
        <p class="username">User</p>
    </div>
    <div class="links">
        <i class="fa-solid fa-clipboard-list"></i>
        <a href="/users"><x-lucide-clipboard-list class="icon"/>User List</a>
        <a href="/create"><x-lucide-pencil class="icon"/>Create</a>
    </div>
    <div class="logout">
        <a href=""><x-lucide-log-out class="icon"/>Logout</a>
    </div>
</div>
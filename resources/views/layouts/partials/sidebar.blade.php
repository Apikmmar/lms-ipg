<style>
    /* Sidebar Styling */
    .sidebar {
        width: 200px;
        height: 100vh;
        background-color: #ffffff;
        position: fixed;
        top: 0;
        /* Ensures it's always at the top */
        padding-top: 20px;
        font-family: Arial, sans-serif;
        z-index: 10;
        /* Keeps sidebar above content */
    }

    .sidebar h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .sidebar img {
        width: 100%;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .sidebar .menu-item {
        list-style-type: none;
        padding: 0;
    }

    .sidebar .menu-item a {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        color: #333;
        text-decoration: none;
        font-size: 16px;
        transition: 0.3s;
    }

    .sidebar .menu-item a:hover {
        background-color: #ddd;
    }

    .sidebar .menu-item a i {
        margin-right: 10px;
    }

    .sidebar .menu-item .dropdown {
        cursor: pointer;
        position: relative;
    }

    .sidebar .menu-item .dropdown-content {
        display: none;
        padding-left: 20px;
        background-color: #ffffff;
        border-left: 2px solid #eaeaea;
    }

    .sidebar .menu-item .dropdown-content a {
        display: block;
        padding: 8px 0;
        font-size: 14px;
        color: #333;
        text-decoration: none;
    }

    .sidebar .menu-item .dropdown-content a:hover {
        background-color: #f0f0f0;
    }

    .sidebar .menu-item .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<!-- Sidebar -->
<div class="sidebar">
    <div class="row" style="background-image:url('asset/photo/lecturerbackground.png');">
        <p style="margin-left: 20px; margin-top: 100px;">TSLB1104<br><br>Grammar in Context</p>
    </div>

    <ul class="menu-item">
        <li class="dropdown">
            <a href="#"><i>📢</i> Announcement</a>
            <div class="dropdown-content">
                <a href="#">Announcement List</a>
                <a href="#">Add Announcement</a>
            </div>
        </li>
        <li><a href="#"><i>📚</i> Learning Material</a></li>
        <li class="dropdown">
            <a href="#"><i>📝</i> Assignment</a>
            <div class="dropdown-content">
                <a href="#">Assignment List</a>
                <a href="#">Submission</a>
            </div>
        </li>
        <li><a href="#"><i>💬</i> Discussion</a></li>
        <li><a href="#"><i>📊</i> Report</a></li>
    </ul>
</div>

<!-- <style>
    /* Sidebar Styling */
    .sidebar {
        width: 200px;
        height: 100vh;
        background-color: #ffffff;
        position: fixed;
        top: 0;
        /* Ensures it's always at the top */
        padding-top: 20px;
        font-family: Arial, sans-serif;
        z-index: 10;
        /* Keeps sidebar above content */
    }

    .sidebar h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .sidebar img {
        width: 100%;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .sidebar .menu-item {
        list-style-type: none;
        padding: 0;
    }

    .sidebar .menu-item a {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        color: #333;
        text-decoration: none;
        font-size: 16px;
        transition: 0.3s;
    }

    .sidebar .menu-item a:hover {
        background-color: #ddd;
    }

    .sidebar .menu-item a i {
        margin-right: 10px;
    }

    .sidebar .menu-item .dropdown {
        cursor: pointer;
        position: relative;
    }

    .sidebar .menu-item .dropdown-content {
        display: none;
        padding-left: 20px;
        background-color: #ffffff;
        border-left: 2px solid #eaeaea;
    }

    .sidebar .menu-item .dropdown-content a {
        display: block;
        padding: 8px 0;
        font-size: 14px;
        color: #333;
        text-decoration: none;
    }

    .sidebar .menu-item .dropdown-content a:hover {
        background-color: #f0f0f0;
    }

    .sidebar .menu-item .dropdown:hover .dropdown-content {
        display: block;
    }
</style> -->
<!-- Sidebar -->
<!-- <div class="sidebar">
    <div class="row" style="background-image:url('asset/photo/studentbackground.jpg');">
        <p style="margin-left: 20px; margin-top: 100px;">TSLB1104<br><br>Grammar in Context</p>
    </div>

    <ul class="menu-item">
        <li><a href="#"><i>📢</i> Announcement</a></li>
        <li><a href="#"><i>📚</i> Learning Material</a></li>
        <li class="dropdown">
            <a href="#"><i>📝</i> Assignment</a>
            <div class="dropdown-content">
                <a href="#">Assignment List</a>
                <a href="#">Submission</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="#"><i>💬</i> Discussion</a>
            <div class="dropdown-content">
                <a href="#">Discussion List</a>
                <a href="#">My Discussion</a>
            </div>
        </li>
    </ul>
</div> -->
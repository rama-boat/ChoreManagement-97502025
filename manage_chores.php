<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/manage_chores.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="../js/manage.js"></script>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-broom"></i>
                        <div class="title">Chore Management</div>
                    </a>
                </li>
                <li>
                    <a href="../view/manage_chores.php">
                        <i class="fa-sharp fa-solid fa-house"></i>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="../view/manage_chores.php">
                        <i class="fa-solid fa-list-check"></i>
                        <div class="title">Manage Chores</div>
                    </a>
                </li>
                <li>
                    <a href="../admin/AssignPage.php">
                        <i class="fa-regular fa-clipboard"></i>
                        <div class="title">Assign Chores</div>
                    </a>
                </li>
                <li>
                    <a href="../login/login_view.php">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <div class="title">Log Out</div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="top-bar">
                <div class="search">
                    <input type="text" name="search" placeholder="Search here">
                    <label for="search"><i class="fas fa-search"></i></label>
                </div>
                <div class="user">
                    <img src="rew.jpg" alt="">
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">7</div>
                        <div class="card-name">In Progress</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-bars-progress"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">14</div>
                        <div class="card-name">Incomplete</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-table-list"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">18</div>
                        <div class="card-name">Completed</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-battery-full"></i>
                    </div>
                </div>
            </div>
            <div class="tables">
                <div class="last-appointments">
                    <div class="heading">
                        <h2>Recently Assigned Chores</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table class="appointments">
                        <thead>
                            <tr>
                                <th>Chore Name</th>
                                <th>Assigned By</th>
                                <th>Date Assigned</th>
                                <th>Date Due</th>
                                <th>Chore Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Laundry</td>
                                <td>Father</td>
                                <td>23/07/24</td>
                                <td>25/07/24</td>
                                <td>In Progress</td>
                                <td>
                                    <select onchange="updateStatus(this)">
                                        <option value="inprogress">In Progress</option>
                                        <option value="incomplete">Incomplete</option>
                                        <option value="completed">Completed</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Car Wash</td>
                                <td>Mother</td>
                                <td>24/07/24</td>
                                <td>26/07/24</td>
                                <td>In Progress</td>
                                <td>
                                    <select onchange="updateStatus(this)">
                                        <option value="inprogress">In Progress</option>
                                        <option value="incomplete">Incomplete</option>
                                        <option value="completed">Completed</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Dish Wash</td>
                                <td>Mother</td>
                                <td>25/07/24</td>
                                <td>27/07/24</td>
                                <td>In Progress</td>
                                <td>
                                    <select onchange="updateStatus(this)">
                                        <option value="inprogress">In Progress</option>
                                        <option value="incomplete">Incomplete</option>
                                        <option value="completed">Completed</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

   

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home|contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../icons/css/all.min.css">
</head>
<body>
    
    <!-- header section start-->
    <header class="header">
        <section class="flex">
            <a href="index.html" class="logo"><img src="../images/project/logo.png" alt=""></a>
            <form class="form-search">
                <input type="text" class="input-search" placeholder="search project.........." disabled>
                <button class="fa-solid fa-search"></button>
            </form>
            <div class="icons">
                <div id="menu-btn" class="fa-solid fa-bars"></div>
                <div id="search-btn" class="fa-solid fa-search"></div>
                <div id="user-btn" class="fa-solid fa-user"></div>
                <div id="switch-mode-btn" class="fa-solid fa-sun"></div>
            </div>
            <div class="profile">
                <img src="../images/project/profile.png" alt="">
                <h3>Asdon Soter</h3>
                <span>Full-Stack Developer</span>
                <a href="contact.html" class="btn">Hire me</a>
                <div class="flex-btn">
                    <a href="login.html" class="option-btn">login</a>
                    <a href="logout.html" class="option-btn">logout</a>
                </div>
            </div>
        </section>
    </header>
    <!-- header section end -->

    <!-- sidebar section start -->
    <section class="sidebar">
        <div class="close-sidebar"><i class="fa-solid fa-times"></i></div>
        <div class="profile">
            <img src="../images/project/profile.png" alt="">
            <h3>Asdon Soter</h3>
            <span>Full Stack Developer</span>
            <a href="contact.html" class="btn">hire me</a>
        </div>
        <nav class="navbar">
            <a href="index.html"><i class="fa-solid fa-home"></i> <span>home</span></a>
            <a href="about.html"><i class="fa-solid fa-question"></i><span>about me</span></a>
            <a href="contact.html"><i class="fa-solid fa-headset"></i><span>contact me</span></a>
            <a href="portfolio.html"><i class="fa-solid fa-briefcase"></i><span>portfolio</span></a>
            <a href="blog.html"><i class="fa-solid fa-chalkboard-user"></i><span>blog</span></a>
        </nav>
    </section>
    <!-- sidebar section end -->
     <!-- table section start  -->
      <section class="table">
            <div class="table-header">
                <h1 class="heading">quick options</h1>
                <div class="box-container">
                    <div class="box">
                        <h3 class="heading">portfolio projects</h3>
                        <div class="flex-btn">
                            <a href="portfolio.html" class="btn">View list project (admin)</a>
                            <a href="../portfolio.html" class="btn">View list project (user)</a>
                        </div>
                    </div>
                    <div class="box">
                        <h3 class="heading">blog technologies</h3>
                        <div class="flex-btn">
                            <a href="blog.html" class="btn">View list project (admin)</a>
                            <a href="../blog.html" class="btn">View list project (user)</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="table-header2">
                    <h1>portfolio</h1>
                    <form action="">
                        <input type="text" name="search" id="search" placeholder="Search a portfolio......">
                        <button class="btn add-new"><i class="fa-solid fa-plus-circle"></i> <span>Add new</span></button>
                    </form>
                </div>
                <div class="table-section">
                    <table>
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th >operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><p>Complete crud using php & mysql</p></td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus tenetur corrupti suscipit porro ab natus consequatur voluptate velit, dicta eos id ducimus minima rerum minus! Ipsa, nisi itaque. Sapiente.</p></td>
                                <td><img src="../images/project/project-1.jpg" alt=""></td>
                                <td class="flex-btn">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><p>Complete crud using php & mysql</p></td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus tenetur corrupti suscipit porro ab natus consequatur voluptate velit, dicta eos id ducimus minima rerum minus! Ipsa, nisi itaque. Sapiente.</p></td>
                                <td><img src="../images/project/project-2.png" alt=""></td>
                                <td class="flex-btn">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><p>Complete crud using php & mysql</p></td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus tenetur corrupti suscipit porro ab natus consequatur voluptate velit, dicta eos id ducimus minima rerum minus! Ipsa, nisi itaque. Sapiente.</p></td>
                                <td><img src="../images/project/project-3.jpg" alt=""></td>
                                <td class="flex-btn">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><p>Complete crud using php & mysql</p></td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus tenetur corrupti suscipit porro ab natus consequatur voluptate velit, dicta eos id ducimus minima rerum minus! Ipsa, nisi itaque. Sapiente.</p></td>
                                <td><img src="../images/project/project-4.png" alt=""></td>
                                <td class="flex-btn">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><p>Complete crud using php & mysql</p></td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus tenetur corrupti suscipit porro ab natus consequatur voluptate velit, dicta eos id ducimus minima rerum minus! Ipsa, nisi itaque. Sapiente.</p></td>
                                <td><img src="../images/project/project-5.png" alt=""></td>
                                <td class="flex-btn">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><p>Complete crud using php & mysql</p></td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus tenetur corrupti suscipit porro ab natus consequatur voluptate velit, dicta eos id ducimus minima rerum minus! Ipsa, nisi itaque. Sapiente.</p></td>
                                <td><img src="../images/project/project-6.png" alt=""></td>
                                <td class="flex-btn">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><p>Complete crud using php & mysql</p></td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus tenetur corrupti suscipit porro ab natus consequatur voluptate velit, dicta eos id ducimus minima rerum minus! Ipsa, nisi itaque. Sapiente.</p></td>
                                <td><img src="../images/project/project-7.png" alt=""></td>
                                <td class="flex-btn">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><p>Complete crud using php & mysql</p></td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus tenetur corrupti suscipit porro ab natus consequatur voluptate velit, dicta eos id ducimus minima rerum minus! Ipsa, nisi itaque. Sapiente.</p></td>
                                <td><img src="../images/project/project-8.jpg" alt=""></td>
                                <td class="flex-btn">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><p>Complete crud using php & mysql</p></td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus tenetur corrupti suscipit porro ab natus consequatur voluptate velit, dicta eos id ducimus minima rerum minus! Ipsa, nisi itaque. Sapiente.</p></td>
                                <td><img src="../images/project/project-9.png" alt=""></td>
                                <td class="flex-btn">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><p>Complete crud using php & mysql</p></td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus tenetur corrupti suscipit porro ab natus consequatur voluptate velit, dicta eos id ducimus minima rerum minus! Ipsa, nisi itaque. Sapiente.</p></td>
                                <td><img src="../images/project/contact-img.svg" alt=""></td>
                                <td class="flex-btn">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><p>Complete crud using php & mysql</p></td>
                                <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus tenetur corrupti suscipit porro ab natus consequatur voluptate velit, dicta eos id ducimus minima rerum minus! Ipsa, nisi itaque. Sapiente.</p></td>
                                <td><img src="../images/project/project-1.jpg" alt=""></td>
                                <td class="flex-btn">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <ul class="pagination">
                    <li><i class="fa-solid fa-angles-left"></i></li>
                    <li><i class="fa-solid fa-chevron-left"></i></li>
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li><i class="fa-solid fa-angles-right"></i></li>
                </ul>
            </div>
      </section>
     <!-- table section end -->

     <!-- footer section start -->
     <footer class="footer">
        &copy;copyright @2025 by <span>Asdon Soter</span> | All rights reserved
      </footer>
     <!-- footer section end -->
    <script src="../js/script.js"></script>
    <script src="js/project.js"></script>
</body>
</html>
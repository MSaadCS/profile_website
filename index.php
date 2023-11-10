<?php
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
    ob_start('ob_gzhandler');
} else {
    ini_set("zlib.output_compression", 1);
    ob_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/imgs/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./assets/fonts/fonts.css">
    <link rel="stylesheet" href="./assets/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="./assets/css/fontawesome.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/all.min.css"/>
    <title>Portfolio</title>
</head>

<header>
    <section id="nav">
        <div class="navbar primary_bg">
            <div class="container">
                <div class="row align-items-center justify-content-md-center">
                    <div class="mobile_menu">
                        <div class="open_menu">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                        <div class="close_menu">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="flex-sm-column align-items-sm-center justify-content-sm-center h-100">
                            <a aria-label="home" href="#home">Home</a>
                            <a aria-label="about" href="#about">About</a>
                            <a aria-label="portfolio" href="#portfolio">Portfolio</a>
                            <a aria-label="testimonial" href = "#testimonial">Testimonial</a>
                            <a aria-label="contact" href="#contact" class="contact_me">Contact</a>
                        </div>    
                    </div>
                </div>
            </div>
            
        </div>
    </section> 
</header>
<body>
    <section class="secondry_bg h-md-vh" id="home">
        <div class="container">
            <div class="row column-sm-reverse justify-content-sm-center justify-content-md-between align-items-center">
                <div class="d-flex flex-column cover_title">
                    <p class="text-white">
                        Hello, It's me
                    </p>
                    <h2 class="text-white">Mohamed Adel</h2>
                    <div class="d-flex flex-wrap align-items-center">
                        <h2 class="text-white"> I am a <span>Full Stack WordPress Developer</span></h2>
                        
                    </div>

                   
                   
                </div>
                <div class="profile_img">
                    <img lazy alt="profile_img" src="./assets/imgs/webp/pp_bg_new.webp">
                </div>
            </div>
        </div>
    </section>

    <section class="primary_bg h-md-vh" id="about">
        <div class="container">
            <div class="row justify-content-sm-center">
                <h1 class="section_title">About Me </h1>
                <p class="text-white">
                    Hi, I am an experienced WordPress developer, after I had been graduated from computer science college I worked as a wordpress developer for more than 5 years, specializing in creating custom themes and plugins from scratch. With a passion for clean and efficient code.
                </p>
                <ul class="text-white">
                    <li class="text-white semi_bold list_none">My experience focused on :</li>
                    <li>Creating custom themes using HTML, CSS, Bootstrap, JavaScript and jQuery, ensuring pixel-perfect and responsive designs</li>
                    <li>Creating custom plugins that extend the functionality of WordPress websites, including advanced features and integrations.</li>
                    <li>Working with RESTful APIs to fetch and display dynamic data from external sources, providing real-time updates and enhancing website capabilities.</li>
                    <li>identify and resolve technical issues, debug code, and optimize performance.</li>
                    <li>Adding all required options that you can use to handle the features and functionality of the WordPress website.</li>
                    <li>uploading any WordPress website to the staging and production enviroment.</li>
                    <li>Make the website full dynamic , easy to use and controlled from users.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class = "secondry_bg d-flex align-items-center" id="portfolio">
        <div class="container">
            <div class="row flex-column align-items-sm-center">
                <h1 class="section_title">Portfolio </h1>
                <div class="wordpress_projects">
                        <div class="projects d-flex flex-wrap justify-content-center">
                                <div class="project_card">
                                    <a aria-label="gbrands" href="https://gbrands.com/" target="_blank" class="w-100 project_link_desktop_view">
                                        <img alt="gbrands" lazy src = "./assets/imgs/webp/gbrands.webp">
                                        <p>
                                            <span class = "bold">Gbrands official website - </span>
                                            This is the official website for Global Brands Group, I created this website from
                                            scratch with full custom code (UI and Back-end) without any page builders plugins. 
                                        </p>
                                    </a>
                                    <div class="collapse_content">
                                            <i class="fa-solid fa-plus bold plus"></i>
                                            <i class="fa-solid fa-minus bold minus"></i>
                                    </div>
                                </div>
                                <div class="project_card">
                                    <a aria-label="etisalat" href = "https://etisalatnews.com/home" target="_blank" class="w-100 project_link_desktop_view">
                                        <img alt="etisalat" lazy src = "./assets/imgs/webp/etsialat.webp">
                                        <p>
                                            <span class="bold">Etislat News - </span>
                                            This website is for Egyptian news, It has a custom subscription flow because the content
                                            of this website is available only for the subscriber users, The subscription
                                            flow created by a custom plugin which interact with the API's that respond with the status of
                                            every user before the user logged in to the website.
                                            I created this website from scratch (UI and backend) with a custom subscription plugin.
                                        </p>
                                    </a>
                                    <div class="collapse_content">
                                            <i class="fa-solid fa-plus bold plus"></i>
                                            <i class="fa-solid fa-minus bold minus"></i>
                                    </div>
                                </div>
                                <div class="project_card">
                                    <a aria-label="mtn_kitchen" href="https://mtn-kitchen.com/en/home" target="_blank" class="w-100 project_link_desktop_view">
                                        <img alt="mtn_kitchen" lazy src = "./assets/imgs/webp/mtn.webp">
                                        <p>
                                            <span class="bold">MTN Kitchen - </span>
                                            This is multi lang website for food recipes, It was created also with custom code and without
                                            any page builder plugins, it also has a custom subscription flow created using a
                                            custom plugin with a custom API.

                                        </p>
                                    </a>
                                    <div class="collapse_content">
                                            <i class="fa-solid fa-plus bold plus"></i>
                                            <i class="fa-solid fa-minus bold minus"></i>
                                    </div>
                                </div>
                                <div class="project_card">
                                    <a aria-label="gorilla" href="https://thegorillafit.com/home" target="_blank" class="w-100 project_link_desktop_view">
                                        <img alt="gorilla" lazy src = "./assets/imgs/webp/gorilla.webp">
                                        <p>
                                            <span class="bold">Gorilla Fit - </span>
                                            This website is for fitness and training, It’s also created from scratch with different
                                            subscription flow using custom API that is
                                            integrated with a custom Plugin that I created.
                                        </p>
                                    </a>
                                    <div class="collapse_content">
                                            <i class="fa-solid fa-plus bold plus"></i>
                                            <i class="fa-solid fa-minus bold minus"></i>
                                    </div>
                                </div>
                        </div>
                </div>
                <div class="react_projects flex-column">
                    <p class="semi_bold text-white react_projects_title">
                    Recently I start Diving into the World of <span class="subtitle"> React js </span> you can check the Projects I've Created on My New Journey!
                    </p>
                    <div class="projects d-flex flex-wrap justify-content-center">


                                <div class="project_card">
                                    <a aria-label="github" href="https://git-hub-finder-tan.vercel.app" target="_blank" class="w-100 project_link_desktop_view">
                                        <img alt="github" lazy src = "./assets/imgs/webp/github.webp">
                                        <p>
                                            <span class = "bold">Github Fineder app - </span>
                                            This is dynamic website that harnesses the power of React to provide a seamless experience for exploring GitHub profiles.
                                            Using this app users can effortlessly search for GitHub users, view their repositories, and access detailed information about their profiles.
                                            The website leverages React's component-based architecture and utilizes modern web technologies to deliver real-time data and an interactive user interface.
                                        </p>
                                    </a>
                                    <div class="collapse_content">
                                            <i class="fa-solid fa-plus bold plus"></i>
                                            <i class="fa-solid fa-minus bold minus"></i>
                                    </div>
                                </div>
                                <div class="project_card">
                                    <a aria-label="feedback" href = "https://helpful-florentine-a273ba.netlify.app/" target="_blank" class="w-100 project_link_desktop_view">
                                        <img alt="feedback" lazy src = "./assets/imgs/webp/feedback_app.webp">
                                        <p>
                                            <span class="bold">Feedback app - </span>
                                            This is web application built with React.js that revolutionizes the feedback collection process.
                                            Seamlessly combining the elegance of React's component-based architecture with the efficiency of CRUD operations, this app empowers users to easily create, read, update, and delete feedback entries.
                                        </p>
                                    </a>
                                    <div class="collapse_content">
                                            <i class="fa-solid fa-plus bold plus"></i>
                                            <i class="fa-solid fa-minus bold minus"></i>
                                    </div>
                                </div>
                                
                    </div>
                </div>
                <div class="cv">
                    <a aria-label="cv" href = "./assets/Mohamed Adel CV - WordPress developer.pdf" download>Download CV</a>
                </div>
                
            </div>
        </div>
    </section>

    <section class="primary_bg d-flex align-items-center" id="testimonial">
        <div class="container">
            <div class="row flex-column align-items-sm-center"">
                <h1 class="section_title">Testimonial</h1>
                <p class="text-white sub_title">clients feedback on linkedIn</p>

                <div class="testimonails_cards d-flex">
                        <div class="card position-relative d-flex flex-column">
                                <i class="fa-solid fa-quote-left"></i>
                                <h1 class="text-white text-center bold">Rawda Nasser</h1>
                                <h2 class="text-white text-center semi_bold">Sr. Frontend Developer | Certified Life Coach</h2>
                                <p class="text-white text-center">
                                Mohamed is a hard worker, a passionate WordPress developer who delivers fast the requirements he's responsible for and commits to deliver on time. I honestly got the opportunity to work closely with him and he met my expectations to deliver on time. I really recommend him and I hope you continue improving your skills, talent and passion. Thank you for the opportunity to work with you.
                                </p>
                                <img alt="client_img" lazy src="./assets/imgs/webp/rawda_bg.webp">
                        </div>
                        <div class="card position-relative d-flex flex-column">
                                <i class="fa-solid fa-quote-left"></i>
                                <h1 class="text-white text-center bold">Ahmed El Attar</h1>
                                <h2 class="text-white text-center semi_bold">Techncinal Product Manager</h2>
                                <p class="text-white text-center">
                                I highly recommend Mohamed as a freelance WordPress developer. I had the pleasure of working with him on two projects 2 years ago, and he consistently demonstrated exceptional problem-solving skills and excellent time management. Mohamed's expertise in WordPress development was evident in the quality of work he delivered. He was proactive in addressing issues and always met project deadlines. I would gladly work with him again and believe he would be a valuable asset to any team or project.
                                </p>
                                <img alt="client_img" lazy src="./assets/imgs/webp/ahmed.webp">
                        </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <section class = "secondry_bg d-flex align-items-center" id="contact">
            <div class="container">
                <div class="row align-items-center justify-content-sm-center justify-content-md-between">
                <h1 class="section_title">contact </h1>
                <p class="text-white">mohamed.adelsaad93@gmail.com</p>
                <div class="conatct_accounts">
                    <a aria-label="footer-links" class="text-white" href="mailto:mohamed.adelsaad93@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
                    <a aria-label="footer-links" class="text-white" href ="https://www.linkedin.com/in/mohamed-adel-82b995185/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a aria-label="footer-links" class="text-white" href ="https://wa.me/+2001008274719" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
                </div>
            </div>
        </section>
    </footer>
</body>



<script src="./assets/fontawesome.min.js"></script>
<script src="./assets/fontawesome.js"></script>
<script src="./assets/all.js"></script>
<script src="./assets/all.min.js"></script>
<script src="./assets/jquery.js"></script>
<script src="./js.js"></script>
</html>
<?php
ob_end_flush();
?>


 

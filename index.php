
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
  </head>
  <body>
    <nav id="desktop-nav">
      <div class="logo">
      <?php echo $_POST["userName"] ?>
      </div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo">
        <?php echo "hello" ?>
      </div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#about" onclick="toggleMenu()">About</a></li>
          <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
          <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img src="./assets/profile-pic.png" alt="John Doe profile picture" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">
          <?php echo $_POST["userName"] ?>
        </h1>
        <p class="section__text__p2"><?php echo $_POST["userRole"] ?></p>
        <!-- <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('./assets/resume-example.pdf')"
          >
            Download CV
          </button>
          <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Contact Info
          </button>
        </div> -->
        <div id="socials-container">
        <img
            src="./assets/linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            onclick="location.href='<?php echo htmlspecialchars($_POST['userUrl']); ?>';"
        />
        <img
            src="./assets/github.png"
            alt="My Github profile"
            class="icon"
            onclick="location.href='<?php echo htmlspecialchars($_POST['gitUrl']); ?>';"
        />

          <!-- <img
            src="./assets/github.png"
            alt="My Github profile"
            class="icon"
            onclick="location.href='https://github.com/'"
          /> -->
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img
            src="./assets/about-pic.png"
            alt="Profile picture"
            class="about-pic"
          />
        </div>
        <div class="about-details-container">
          <div class="about-containers">
            <div class="details-container">
              <img
                src="./assets/experience.png"
                alt="Experience icon"
                class="icon"
              />
              <h3>Experience</h3>
              <p class="subtext"><?php echo $_POST["userExperience"] ?></p>
            </div>
            <div class="details-container">
              <img
                src="./assets/education.png"
                alt="Education icon"
                class="icon"
              />
              <h3>Education</h3>
              <p class = "subtext"><?php echo $_POST["userEducation"] ?></p>
            </div>
          </div>
          <div class="text-container">
            <p>
            <?php echo $_POST["userAbout"] ?>
            </p>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#experience'"
      />
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Experience</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title"><?php echo $_POST["userRole"] ?></h2>
            <div class="article-container">
              <!-- <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>HTML</h3>
                  <p class="subtext">Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>CSS</h3>
                  <p class="subtext">Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>SASS</h3>
                  <p class="subtext">Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>JavaScript</h3>
                  <p class="subtext">Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>TypeScript</h3>
                  <p class="subtext">Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Material UI</h3>
                  <p class="subtext">Intermediate</p>
                </div>
              </article> -->
              <?php
                // $skills = $_POST["userSkills"];
                // $skills = explode(",", $skills);
                // foreach($skills as $skill) {
                //   echo "<article>
                //   <img
                //     src='./assets/checkmark.png'
                //     alt='Experience icon'
                //     class='icon'
                //   />
                //   <div>
                //     <h3>$skill</h3>
                //     <p class='subtext'>Experienced</p>
                //   </div>
                // </article>";
                // }
                $numberOfSkills = $_POST["numberOfSkills"];
    
                $skills = array();
                for ($i = 1; $i <= $numberOfSkills; $i++) {
                    $skillName = "userSkill" . $i;
                    if (isset($_POST[$skillName])) {
                        // $skills[] = $_POST[$skillName];
                        echo "<article>
                        <img
                          src='./assets/checkmark.png'
                          alt='Experience icon'
                          class='icon'
                        />
                        <div>
                          <h3>$_POST[$skillName]</h3>
                          <p class='subtext'>Experienced</p>
                        </div>
                      </article>";
                    }
                }
              ?>
            </div>
          </div>
          <!-- <div class="details-container">
            <h2 class="experience-sub-title">Frontend Development</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>PostgreSQL</h3>
                  <p class="subtext">Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Node JS</h3>
                  <p class="subtext">Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Express JS</h3>
                  <p class="subtext">Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Git</h3>
                  <p class="subtext">Intermediate</p>
                </div>
              </article>
            </div>
          </div>
        </div> -->
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
      />
    </section>
    <section id="projects">
      <p class="section__text__p1">Browse My Recent</p>
      <h1 class="title">Projects</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <?php
            $numberOfProjects = $_POST["numberOfProjects"];
    
            $skills = array();
            for ($i = 1; $i <= $numberOfProjects; $i++) {
                $projectLink = $_POST["userProjectLink" . $i];
                $projectName = $_POST["userProjectName" . $i];
                
                    // $skills[] = $_POST[$skillName];
                    echo "<div class='details-container color-container'>
                    <div class='article-container'>
                      <img
                        src='./assets/project-$i.png'
                        alt='Project $i'
                        class='project-img'
                      />
                    </div>
                    <h2 class='experience-sub-title project-title'>$projectName</h2>
                    <div class='btn-container'>
                      <button
                        class='btn btn-color-2 project-btn'
                        onclick='location.href=$projectLink'
                      >
                        Github
                      </button>
                      
                    </div>
                  </div>";
                
            }
          ?>
          
          <!-- <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/project-2.png"
                alt="Project 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Project Two</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/project-3.png"
                alt="Project 3"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Project Three</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div> -->
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
      />
    </section>
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Me</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img
            src="./assets/email.png"
            alt="Email icon"
            class="icon contact-icon email-icon"
          />
          <p><?php echo $_POST["userEmail"] ?></p>
        </div>
        <div class="contact-info-container">
          <img
            src="./assets/linkedin.png"
            alt="LinkedIn icon"
            class="icon contact-icon"
          />
          <p><a href='<?php echo htmlspecialchars($_POST['userUrl']); ?>'>LinkedIn</a></p>
        </div>
      </div>
    </section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <!-- <p>Copyright &#169; 2023 John Doe. All Rights Reserved.</p> -->
    </footer>
    <script src="script.js"></script>
  </body>
</html>

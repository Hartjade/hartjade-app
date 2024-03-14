<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AlA Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTDNEpUTHQoQUJMHLrErGJyHg89uy71MyuH5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" class="css">
    <link rel="stylesheet" href="css/media.css" class="css">

  </head>

  <body>
    <nav id="desktop-nav">
      <div class="logo">AlA</div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Services</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>

    <!-- mobile nav -->
    <nav id="hamburger-nav">
      <div class="logo">AlA</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#about" onclick="toggleMenu()">About</a></li>
          <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
          <li><a href="#projects" onclick="toggleMenu()">Services</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>

    <!-- content -->
    <section id="profile">
      <div class="section__pic-container">
        <img src="profile-pic.jpg" alt="John Doe profile picture" style="border-radius: 50%;" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Almuadan Yasin</h1>
        <p class="section__text__p2">Shopify Developer</p>
        <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('https://drive.google.com/file/d/1nlrSLT021mICpb1PbMKrF-W114WylQsb/view?usp=sharing')"
          >
            Download CV
          </button>
          <button class="btn btn-color-1" onclick="location.href='#contact'">
            Contact Info
          </button>
        </div>
        <div id="socials-container">
          <img
            src="linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            onclick="location.href='https://www.linkedin.com/in/almuadan-yasin-a7456529a/'"
          />
          <img
            src="fb.png"
            alt="My Fb profile"
            class="icon"
            onclick="location.href='https://www.facebook.com/almuadan.0821'"
            />
          <img
            src="github.png"
            alt="My Github profile"
            class="icon"
            onclick="location.href='https://github.com/AlmuadanYasin'"
          />
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img
            src="about-pic.png"
            alt="Profile picture"
            class="about-pic" style="filter: grayscale(100%);"
          />
        </div>
        <div class="about-details-container">
          <div class="about-containers">
            <div class="details-container">
              <img
                src="experience.png"
                alt="Experience icon"
                class="icon"
              />
              <h3>Experience</h3>
              <p>Few Months <br />Shopify Development</p>
            </div>
            <div class="details-container">
              <img
                src="education.png"
                alt="Education icon"
                class="icon"
              />
              <h3>Education</h3>
              <p>Bachelor of Science in Info Tech<br />ICT-Mobile App & Web Dev</p>
            </div>
          </div>
          <div class="text-container">
            <p>
            I have a experienced Web Developer and UI Designer with experience building and designing websites and web apps from Shopify. 
            Html, CSS, Php, and Laravel are the field of my expertise when it comes to building websites and web apps. 
            I deal with graphics designing as well. I am know to use Figma, Adobe Illustrator, and Photoshop for the design. 
            Photography is also one of the skills I use in my design.
            </p>
          </div>
        </div>
      </div>
      <img
        src="arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='#experience'"
      />
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Experience</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title">Frontend Development</h2>
            <div class="article-container">
              <article>
                <img
                  src="checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>HTML</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>CSS</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>JavaScript</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Figma</h3>
                  <p>Intermediate</p>
                </div>
              </article>
            </div>
          </div>
          <div class="details-container">
            <h2 class="experience-sub-title">Shopify Development</h2>
            <div class="article-container">
              <article>
                <img
                  src="checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Graphics</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Listing</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Customizing</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Scheming</h3>
                  <p>Intermediate</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <img
        src="arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='#projects'"
      />
    </section>
    <section id="projects">
      <p class="section__text__p1">Browse My Recent</p>
      <h1 class="title">Services</h1>
      <div class="experience-details-container">
        <div class="about-containers">
        <div class="details-container color-container">
            <div class="article-container">
              <img
                src="project-2.png"
                alt="Project 3"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Store Building</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://mancovedepot.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="project-3.png"
                alt="Project 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Logo Designing</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://ebikemove.myshopify.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="project-1.png"
                alt="Project 1"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">UI Designing</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://outdoorvana.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
      </div>
      <img
        src="arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='#contact'"
      />
    </section>
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Me</h1>
      <P style="text-align: center;"><strong>in my social media accounts</strong></P>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
        <a href="https://www.linkedin.com/in/almuadan-yasin-a7456529a/">
          <img
            src="linkedin.png"
            alt="LinkedIn icon"
            class="icon contact-icon" href="https://www.linkedin.com/in/almuadan-yasin-a7456529a/"
          />
         </a>
        </div>
        <div class="contact-info-container">
        <a href="https://www.facebook.com/almuadan.0821">
          <img
            src="fb.png"
            alt="Email icon"
            class="icon contact-icon email-icon"
          />
          </a>
        </div>
        <div class="contact-info-container">
        <a href="https://github.com/AlmuadanYasin">
          <img
            src="github.png"
            alt="LinkedIn icon"
            class="icon contact-icon" href=""
          />
         </a>
        </div>
      </div>
    </section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Services</a></li>
            <li><a href="#profile">Back to top</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2023 AlA. All Rights Reserved.</p>
    </footer>
  </body>

  <script>
    function toggleMenu() {
  const menu = document.querySelector(".menu-links");
  const icon = document.querySelector(".hamburger-icon");
  menu.classList.toggle("open");
  icon.classList.toggle("open");
}

  </script>
</html>
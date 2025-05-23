<p align="center">
  <a href="https://github.com/PacaHat/Anipaca">
    <img 
      src="https://raw.githubusercontent.com/PacaHat/Anipaca/refs/heads/main/public/logo/Untitled255_20241231223556.png" 
      alt="anipaca_mascot" 
      width="275" 
      height="275"
      decoding="async"
      fetchpriority="high"
    />
  </a>
</p>

# <p align="center"> <img src="public/logo/logo.png?v=0.1" alt="Logo" width="50%" height="50%"></p>

<p align="center">
  <div align="center">
    <h3><s>(<a href="https://hianime.to/">Hianime.to</a> Clone)</s> Anipaca - Watch High Quality Anime Online</h3>
    <a href="https://discord.gg/aVvqx77RGs">
      <img src="https://img.shields.io/discord/1012901585896087652?label=&logo=discord&color=5460e6&style=flat-square&labelColor=2b2f35">
    </a>
 <a href="https://github.com/PacaHat/Anipaca/graphs/contributors">
      <img src="https://img.shields.io/github/contributors/PacaHat/Anipaca">
    </a>
     </a>
 <a href="https://github.com/PacaHat/Anipaca/forks">
      <img src="https://img.shields.io/github/forks/PacaHat/Anipaca">
    </a>
     <a href="https://github.com/PacaHat/Anipaca/stargazers">
      <img src="https://img.shields.io/github/stars/PacaHat/Anipaca">
    </a>
    <a href="https://github.com/PacaHat/Anipaca/issues">
      <img src="https://img.shields.io/github/issues/PacaHat/Anipaca">
    </a>
  </div>
  <hr />
</p>

> [!IMPORTANT]
>
> 1. [Pre built codebase](https://github.com/PacaHat/Anipaca/tree/demo)
 is only meant to help you get a starting point the API's has rate-limiting enabled to minimize bandwidth consumption. It is recommended to deploy your own instance for personal use by customizing the API as you need it to be.
> 2. This website is just an unofficial clone of [hianime.to](https://hianime.to) But both share same database.
> 3. The content that this website provides is not mine, nor is it hosted by me. These belong to their respective owners. This website just demonstrates how to build an ANIME WEBSITE .

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

![Product Name Screen Shot](https://raw.githubusercontent.com/PacaHat/Anipaca/refs/heads/main/public/images/banner.png "Product Screenshot")


<details>
  <summary><strong>Anipaca</strong> - Click to expand</summary>
  <p>
     **Anipaca** is an open-source anime streaming website that provides a high-quality anime viewing experience. Built on top of the HiAnimeAPI, this PHP application offers a range of features designed for anime enthusiasts.
  </p>
  <h3>Why You Should Use Anipaca</h3>
  <ul>
    <li><strong>Ad-Free Experience</strong>: Enjoy watching anime without annoying video ads.</li>
    <li><strong>High-Quality Streaming</strong>: Stream your favorite shows in 1080p, 720p, 480p, and 360p.</li>
    <li><strong>Device Compatibility</strong>: Access the platform on PCs, laptops, tablets, mobile devices, and smart TVs.</li>
    <li><strong>Extensive Browsing Options</strong>: Easily browse, search, and watch anime based on genres, seasons, and more.</li>
    <li><strong>Future Integration</strong>: Potential integration with Anilist for enhanced features.</li>
  </ul>
  <p>Explore Anipaca and elevate your anime streaming experience!</p>
</details>


<!-- GETTING STARTED -->
## Getting Started

This is an example of how you may give instructions on setting up your project on cPanle.
To get a website running up follow these simple example steps.


### API That you need

| API Name     | Deploy Link                                                                                              | Example API Link                                     |
|--------------|----------------------------------------------------------------------------------------------------------|-----------------------------------------------------|
| Hianime API  | [![Deploy with Vercel](https://vercel.com/button)](https://vercel.com/new/clone?repository-url=https://github.com/ghoshRitesh12/aniwatch-api)  | `GET https://hianime-psi.vercel.app/`        |
| Zenime API   | [![Deploy with Vercel](https://vercel.com/button)](https://vercel.com/new/clone?repository-url=https://github.com/itzzzme/anime-api)          | `GET https://zen-api-brown.vercel.app/`         |
| M3U8 Proxy    | [![Deploy with Vercel](https://vercel.com/button)](https://vercel.com/new/clone?repository-url=https%3A%2F%2Fgithub.com%2Fshashstormer%2Fm3u8_proxy-cors&project-name=m3u8-proxy-cors&repository-name=m3u8-proxy-cors) | `GET https://proxy-pink-three.vercel.app/`     |





## Installation

1. **Clone or Download the repository**:
   ```bash
   git clone https://github.com/PacaHat/Anipaca.git
   ```

2. **Set up the database**:
   - Import the provided SQL file into your MySQL database.
   - Update the database connection details in `_config.php`.

3.  **Set up the database**:
   ```bash
<?php
// Database connection
$conn = new mysqli("HOSTNAME", "USERNAME", "PASSWORD", "DATABASE");

if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}

// Website settings
$websiteTitle = "AniPaca";
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "@gmail.com";

$version = "0.1";

// Social links
$discord = "https://discord.gg/aVvqx77RGs";
$github = "https://github.com/PacaHat";
$twitter = "https://x.com/PacaHat";

// API endpoints
$api = "your-hosted-api.com/api/v2/hianime"; // Use this in src/component/qtip.php
$zpi = "your-hosted-api.com/api"; // Anime API
$proxy = "your-hosted-proxy.com/cors?url="; // CORS Proxy

// Banner image
$banner = $websiteUrl . "/public/images/banner.png";
?>
 ```

# 🌐 Launch Your Website Today!  

[![Get Started](https://img.shields.io/badge/Click%20Here-blue?style=for-the-badge)](https://tohost.in)


<!-- ROADMAP -->
## Roadmap

- [x] Add Comment section
- [ ] Add Admin panel for better management
- [x] Add PHP routing system to avoid htaccess error
- [ ] Add Multiple video sources
- [ ] Anime download
- [ ] Multi-language Support
    - [ ] Hindi
    - [ ] Spanish
- [ ] **Need more features? Create a request on our Discord server!** [Join here](https://discord.gg/aVvqx77RGs)


<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->

### Top contributors:
<a href="https://github.com/PacaHat/Anipaca/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=PacaHat/Anipaca" alt="Contributors" />
</a>

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


<p align="right">(<a href="#readme-top">back to top</a>)</p>










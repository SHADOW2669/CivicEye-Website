# Civic Eye Website Demo

The **Civic Eye Website** is the official frontend for **Civic Eye**, an AI-powered helmet violation detection system. This server-side edition offers authentication, app downloads, team bios, contact features, and detection result storage — all connected to a backend powered by PHP and MySQL.

[![CivicEye Website Status](https://github.com/SHADOW2669/CivicEye-Website/actions/workflows/check-status.yml/badge.svg)](https://civiceye.shadow269.in)

<table>
  <tr>
    <td width="50%" valign="top">
      <p align="center">
        <a href="https://github.com/SHADOW2669/CivicEye">
          <img src="https://github.com/SHADOW2669/CivicEye/blob/main/DATA/icon.png?raw=true" width="70" alt="CivicEye Core Icon"/>
        </a>
      </p>
      <h3 align="left">CivicEye (Core Application)</h3>
      <p align="left">Real-time helmet detection using <strong>YOLOv8</strong> and a custom <strong>GUI</strong>.</p>
      <ul>
        <li>🎯 <strong>YOLOv8</strong>-based detection</li>
        <li>🖥️ <strong>GUI</strong> with image storage & preview</li>
        <li>📦 Offline-capable for resource-constrained systems</li>
      </ul>
      <p align="left">
        <strong>🔗 <a href="https://github.com/SHADOW2669/CivicEye">View on GitHub</a></strong>
        </p>
    </td>
    <td width="50%" valign="top">
      <p align="center">
        <a href="https://github.com/SHADOW2669/CivicEye-Website-Server">
          <img src="https://shadow2669.github.io/CivicEye_Website/IMAGES/logo1.png" width="180" alt="CivicEye Server Edition Logo"/>
        </a>
      </p>
      <h3 align="left">CivicEye Website/Server</h3>
      <p align="left">Robust PHP & MySQL backend for the CivicEye ecosystem.</p>
      <ul>
        <li>🔐 Secure user authentication</li>
        <li>📊 Admin panel for data management</li>
        <li>📝 Detailed violation logging for centralized incident tracking</li>
      </ul>
       <p align="left">
        <strong>🔗 <a href="https://civiceye-demo.shadow269.in/">View the static Website</a></strong>
      <p align="left">
        <strong>🔗 <a href="https://github.com/SHADOW2669/CivicEye-Website-Server">View on GitHub</a></strong>
      </p>
    </td>
  </tr>
</table>

The **Civic Eye Web Interface** acts as the central hub to manage authentication, display detection results, and interact with users via contact forms. Detection happens locally; this server interface focuses purely on session management, UI rendering, and MySQL data handling.

## Features

- Responsive multi-page frontend:
  - Home
  - Download
  - Team
  - Contact Us
  - Login/Register
- Clean authentication system (login + register with session)
- Admin panel (`user_page.php`) for contact form logs and detection moderation
- Detection upload API with image saving and metadata logging
- Beautiful dark mode with **glassmorphism**
- GitHub download integration
- Animated backgrounds (Particles.js, AOS)
- Custom-styled with `login.css` & `style.css`

## Technologies Used

| Layer        | Tech                         |
|--------------|------------------------------|
| Frontend     | HTML5, CSS3, JavaScript      |
| Backend      | PHP (session, form handling) |
| Database     | MySQL (auth, contact, detects)|
| Styling      | `login.css`, `style.css`     |
| JS Libraries | AOS, Particles.js, Lucide    |


## Contributing

We welcome all contributions that help improve the Civic Eye Website!

If you have suggestions, bug fixes, design improvements, or feature additions, feel free to fork the repository and submit a pull request.

- Found an issue? [Open a GitHub Issue](https://github.com/SHADOW2669/CivicEye-Website-Server/issues)
- Want to enhance something? We'd love your contributions!

> 🙌 Feel free to use this project in your own work — but if you make improvements, please consider contributing them back to the community!

## License

Licensed under the **MIT License**.  
See the [LICENSE](https://github.com/SHADOW2669/CivicEye-Website-Server/blob/main/LICENSE).

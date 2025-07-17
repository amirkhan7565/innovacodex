# Innovacodex – Interactive Portfolio Website

A modern, scroll-based, animation-rich portfolio website developed using HTML, CSS, JavaScript (GSAP + Lenis), and Blender 3D assets. This project was built as part of a frontend development assignment to demonstrate dynamic visuals, responsive design, and form handling using a lightweight backend setup.

🔗 **Live Site**: https://innovacodex.netlify.app/

---

## 📁 Project Structure

project-root/
│
├── index.html                   
├── x.glb                       
├── sendmail.php                
├── README.md                    
│
├── assets/                      
│   ├── css/        
│   ├── js/
│   ├── images/     


---

## 🚀 Features

- Scroll-triggered animations using **GSAP** and **Lenis**
- 3D intro animation created with **Blender**
- Responsive layout using **Bootstrap**
- PHP-powered contact form connected via **SMTP**
- External SMTP service configured with **Elastic Email**

---

## 🛠️ Technologies Used

- HTML, CSS, JavaScript
- GSAP (GreenSock Animation Platform)
- Lenis (Smooth scrolling library)
- Blender (for .glb 3D model export)
- Bootstrap  (for responsive layout)
- PHP Mailer (form submission)
- Elastic Email (SMTP email delivery)
- Netlify (static hosting)

---

## 📧 Contact Form Setup

- The form is handled via `sendmail.php` and works with SMTP configuration.
- Make sure the PHP script is hosted on a backend-supported platform (e.g., InfinityFree), since Netlify does not support PHP.

---

## ✅ How to Test Locally

1. Clone this repository:

git clone https://github.com/amirkhan7565/innovacodex

Open `index.html` in your browser to test animations and layout.

3. To test the PHP form upload it to InfinityFree and connect to a verified SMTP service

---

## ✨ Credits

- Animations powered by [GSAP](https://greensock.com/gsap/)
- Smooth scrolling via [Lenis](https://lenis.studiofreight.com/)
- 3D model created in [Blender](https://www.blender.org/)
- Email via [PHPMailer](https://github.com/PHPMailer/PHPMailer)
- SMTP powered by [Elastic Email](https://elasticemail.com/)

---

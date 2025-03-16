# 🛒 e-Pharma: An Online Pharmacy System  

e-Pharma is a **feature-rich e-commerce platform** designed to simplify medicine purchases. It allows users to browse products, place orders, upload prescriptions, and receive notifications on order status.  

---

## 🎥 Demo Video  

Check out the **demo video** of the e-Pharma project on YouTube:  
[![Watch Demo Video](https://img.youtube.com/vi/4fUm7BfWj6I/0.jpg)](https://www.youtube.com/watch?v=4fUm7BfWj6I)  

---

## 📌 Features  

✅ User authentication (Sign Up/Login)  
✅ Product browsing & search functionality  
✅ Cart management (Add to Cart, Remove from Cart)  
✅ Order placement with prescription uploads  
✅ Admin dashboard for managing orders & products  
✅ Order confirmation & cancellation notifications  

---

## 🛠 Tech Stack Used  

- **Frontend:** HTML, CSS, Bootstrap  
- **Backend:** Laravel (PHP)  
- **Database:** MySQL  
- **Authentication:** Laravel Auth (or custom session-based auth)  

---

## 🏗 System Architecture  

![System Architecture](https://your-image-link.com)  

---

## 🚀 Installation & Setup  

### 1️⃣ Clone the Repository  
```bash
git clone https://github.com/yourusername/e-pharma.git
cd e-pharma
2️⃣ Install Dependencies
bash
Copy
Edit
composer install
npm install
3️⃣ Set Up the Environment
Copy .env.example to .env and configure database credentials:

bash
Copy
Edit
cp .env.example .env
php artisan key:generate
Then, update .env with:

env
Copy
Edit
DB_DATABASE=epharma_db
DB_USERNAME=root
DB_PASSWORD=yourpassword
4️⃣ Run Database Migrations & Seeders
bash
Copy
Edit
php artisan migrate --seed
5️⃣ Start the Application
bash
Copy
Edit
php artisan serve
Open http://127.0.0.1:8000 in your browser.

📜 API Endpoints (if applicable)
Method	Endpoint	Description
POST	/login	User Login
POST	/register	User Registration
GET	/products	Fetch All Products
POST	/orders	Place an Order
👥 Contributors
👤 Anik Kumer Das
📧 anikdas548@gmail.com
🔗 LinkedIn

📜 License
This project is licensed under the MIT License.

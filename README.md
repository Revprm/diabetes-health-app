# Diabetes Health App Documentation

## Overview
The Diabetes Health App is a web-based application designed to help users evaluate their risk of diabetes. By leveraging a machine learning model deployed on a FastAPI server, the app provides real-time predictions based on user-provided health indicators. The Laravel framework serves as the user interface, ensuring a seamless and secure interaction experience.

## ML API Repository
[ML API](https://github.com/Revprm/DiabetesHealthIndicator)

### Key Features:
- **Intuitive User Interface**: A clean and user-friendly interface for entering health data.
- **Accurate Predictions**: Real-time analysis using a trained machine learning model.
- **Data Management**: Secure storage and retrieval of user health data and prediction history.
- **Seamless Integration**: Efficient communication between the Laravel frontend and FastAPI backend.

---

## System Architecture

### 1. **Frontend: Laravel Framework**
- **Role**: Manages the user-facing components of the application.
- **Main Features**:
  - User registration, login, and session management.
  - Health indicator input form (e.g., age, BMI, glucose levels).
  - Displays prediction results and historical insights.

### 2. **Backend: FastAPI (Machine Learning API)**
- **Role**: Processes input data and returns predictions.
- **Main Features**:
  - Receives data from the Laravel application.
  - Utilizes the Diabetes Health Indicator model for predictions.
  - Sends results securely back to the Laravel frontend.

---

## Documentation Page

### Structure:
1. **Introduction**:
   - A brief overview of the app’s purpose and capabilities.
   - High-level description of the prediction model and its benefits.

2. **How to Use**:
   - Detailed walkthrough of the app, from logging in to viewing results.
   - Tips for inputting health data to achieve the best prediction accuracy.

3. **Technical Details**:
   - Summary of the machine learning model, including training data and validation.
   - Data privacy and security protocols to safeguard user information.

4. **FAQs**:
   - Answers to common user queries.
   - Guidance for resolving basic technical issues.

5. **Contact Support**:
   - Contact information for user support (email, chat, etc.).

### Key Features of the Documentation Page:
- **Searchable Content**: Quickly locate topics using a search bar.
- **User-Friendly Design**: Clear sections and concise language.
- **Resource Links**: Access external materials for deeper learning.

---

## Deployment Instructions

### Prerequisites:
- **Laravel Server**:
  - PHP ≥ 8.0
  - Composer
  - MySQL database
- **FastAPI Server**:
  - Python ≥ 3.8
  - Required libraries listed in `requirements.txt`

### Deployment Steps:
1. **Setting Up Laravel**:
   - Install dependencies with `composer install`.
   - Configure the `.env` file with database details.
   - Run database migrations using `php artisan migrate`.

2. **Setting Up FastAPI**:
   - Install dependencies with `pip install -r requirements.txt`.
   - Launch the FastAPI server with `python main.py` or using Docker.

3. **Integration**:
   - Update Laravel's API configuration to connect to the FastAPI server endpoint.
   - Ensure CORS is configured in FastAPI to allow communication with Laravel.

---

## Future Enhancements
- **Expanded Health Indicators**: Incorporate additional inputs like cholesterol levels and physical activity data.
- **Advanced Analytics**: Develop a dashboard with trend analysis and visual insights.
- **Localization**: Add support for multiple languages to reach a broader audience.
- **Prediction Optimization**: Improve model efficiency for faster and more reliable outputs.

---

## Troubleshooting

### Common Issues and Solutions:
1. **FastAPI Server Not Responding**:
   - Ensure the server is running on the specified port and is accessible via the network.

2. **Laravel-API Connection Issues**:
   - Double-check API URL configurations and verify CORS settings in the FastAPI application.

3. **Inconsistent Predictions**:
   - Confirm the model is trained with up-to-date, high-quality data.

4. **Database Errors**:
   - Verify Laravel’s database credentials in the `.env` file and ensure the database server is running.

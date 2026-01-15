Point of Sale (POS) Management System

This project is a partial fulfillment of the requirements for the Software Engineering Course (CSCI 2313). It demonstrates the implementation of a POS system using Object-Oriented Programming (OOP)** principles and **Software Architecture Patterns (3-Tier & Facade Pattern) based on UML designs.


Student Information
Name: Farah Aiman Queshta
Student ID: 220221565
Course: Software Engineering
Instructor: Dr. Abdelkareem Alashqar
Semester: 1st Semester 2025/2026


Project Overview
The system is designed to manage sales transactions and inventory efficiently. The implementation focuses on two core Use Cases:
1. Login: Secure authentication for users (Cashier/Admin).
2. Process Sale: Handling item scanning, price calculation, and inventory updates.


Architecture & Design
The project follows a Layered Architecture to ensure separation of concerns:
UserInterface Layer: Contains UI components and `UIFacade` to handle user interactions.
AppLogic Layer: Contains the business rules, `ALFacade`, `AuthController`, and `InventoryManager`.
Database Layer: Manages data persistence through `DbFacade`.


Folder Structure

/POS_Project
│
├── /UserInterface          # Presentation Layer
│   ├── UIFacade.php        # Entry point for UI requests
│   ├── LoginScreen.php     # Login Interface logic
│   └── SalesInterface.php  # Sales Terminal Interface logic
│
├── /AppLogic               # Business Logic Layer
│   ├── ALFacade.php        # Entry point for logic operations
│   ├── AuthController.php  # Authentication logic
│   └── InventoryManager.php# Stock management logic
│
├── /Database               # Data Access Layer
│   ├── DbFacade.php        # Unified interface for DB operations
│   └── Database.php        # DB Connection settings
│
└── index.php               # Main entry point (Bootstrap)
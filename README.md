# Healthcare Management System

## Overview

The Healthcare Management System is a web application designed to streamline various healthcare-related tasks for different roles within a medical facility. The system is built using PHP and provides tailored interfaces for patients, doctors, admin, receptionists, laboratorists, accountants, nurses, and pharmacy staff. Each user role has access to specific functionalities that help them perform their tasks efficiently.

## Features

### Common Features

- **Login System**: Secure login for all user roles.
- **Side Panel Navigation**: Easy access to role-specific functionalities.

### Role-Specific Features

#### Doctor
- **Dashboard**: Overview of activities and statistics.
- **View Doctors**: List and manage other doctors.
- **View Nurse**: List and manage nurses.
- **View Receptionist**: List and manage receptionists.
- **Manage Patients**: Add, view, edit, and delete patient records.
- **Manage Schedule**: Create and update work schedules.
- **Appointments**: Manage patient appointments.
- **Prescription**: Create and manage patient prescriptions.
- **Communications**: Send and receive messages.
- **Profile**: View and edit personal profile details.

#### Patient
- **Dashboard**: Overview of appointments, prescriptions, and other personal details.
- **Appointments**: Schedule and view appointments.
- **Prescription**: View prescriptions provided by doctors.

#### Admin
- **Dashboard**: Overview of system activities and statistics.
- **Manage Users**: Add, view, edit, and delete users (doctors, nurses, receptionists, patients, etc.).
- **System Settings**: Configure system-wide settings.

#### Receptionist
- **Dashboard**: Overview of daily activities and statistics.
- **Manage Appointments**: Schedule, view, and cancel appointments.
- **Manage Patients**: Add, view, and update patient records.
- **Communications**: Send and receive messages.

#### Laboratorist
- **Dashboard**: Overview of lab activities and statistics.
- **Manage Tests**: Schedule, perform, and manage lab tests.
- **Patient Records**: Access patient records related to lab tests.

#### Accountant
- **Dashboard**: Overview of financial activities and statistics.
- **Manage Invoices**: Create, view, and manage invoices.
- **Payment Records**: Track patient payments and other financial transactions.

#### Nurse
- **Dashboard**: Overview of nursing activities and statistics.
- **Manage Patients**: Assist doctors with patient management.
- **Manage Schedule**: Create and update work schedules.
- **Communications**: Send and receive messages.

#### Pharmacy
- **Dashboard**: Overview of pharmacy activities and statistics.
- **Manage Medications**: Add, view, and update medication inventory.
- **Prescription Fulfillment**: Process prescriptions from doctors.

## Installation

1. **Clone the Repository**: 
   ```bash
   git clone https://github.com/yourusername/healthcare-management-system.git
   ```
2. **Navigate to the Project Directory**:
   ```bash
   cd healthcare-management-system
   ```
3. **Set Up the Database**:
   - Import the SQL file located at `/path/to/database.sql` into your MySQL database.
4. **Configure the Environment**:
   - Rename `.env.example` to `.env` and update the database credentials.
5. **Start the Server**:
   - Make sure your server (Apache, Nginx, etc.) is running and configured to serve the PHP files.
   - Navigate to the project URL in your browser.

## Usage

1. **Login**: Navigate to the login page and enter your credentials.
2. **Role-Based Navigation**: Once logged in, use the side panel to navigate through the available functionalities based on your role.

## Contributing

1. **Fork the Repository**: Click on the "Fork" button at the top right corner of the repository page.
2. **Clone Your Fork**: 
   ```bash
   git clone https://github.com/Jhalak29/Hospital-Management-System.git
   ```
3. **Create a New Branch**: 
   ```bash
   git checkout -b feature/YourFeatureName
   ```
4. **Make Your Changes**: Implement your feature or bug fix.
5. **Commit Your Changes**: 
   ```bash
   git commit -m 'Add some feature'
   ```
6. **Push to the Branch**: 
   ```bash
   git push origin feature/YourFeatureName
   ```
7. **Create a Pull Request**: Open a pull request to the main repository.

## Acknowledgements

- Thanks to all contributors and the open-source community.




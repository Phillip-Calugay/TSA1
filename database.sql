-- Tasks for Today database
-- Import this file into the MySQL database created by your hosting provider.

CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('[AI Prohibited] Summative Assessment 1 - 1TSY2627_IT0035_TC31-3', 'pending', '2026-09-30', '2026-09-29 08:00:00'),
('Quiz 2 - Module 1 - 1TSY2627_IT0035_TC31-3', 'pending', '2026-09-30', '2026-09-29 08:15:00'),
('[TECHNICAL] [AI-ASSISTED] Technical Formative Assessment 3: Module 3', 'pending', '2026-09-30', '2026-09-29 08:30:00'),
('[AI-INTEGRATED] Module 3: CodeIgniter Forms, Validation, File Upload, and CRUD', 'pending', '2026-10-01', '2026-09-29 08:45:00'),
('[F3-FORMATIVE] Module 3: CodeIgniter Forms, Validation, File Upload, and CRUD', 'pending', '2026-10-01', '2026-09-29 09:00:00'),
('[TECHNICAL] [AI-PROHIBITED] Technical Summative Assessment 1: Module 1 and Module 2', 'pending', '2026-10-01', '2026-09-29 09:15:00'),
('[AI-ASSISTED] Module 3: CodeIgniter Forms, Validation, File Upload, and CRUD', 'completed', '2026-10-02', '2026-09-29 09:30:00'),
('Technical 4 - Cross-Border Compliance (Case Study)', 'pending', '2026-10-02', '2026-09-29 09:45:00');

INSERT INTO users (username, full_name, email, created_at) VALUES
('demo_student', 'Demo Student', 'demo.student@example.com', '2026-09-29 08:00:00');

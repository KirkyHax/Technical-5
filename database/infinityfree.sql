-- Import this file through InfinityFree phpMyAdmin.
-- Do not add a USE statement; select the database before importing.

CREATE TABLE IF NOT EXISTS `accounts` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `account_type` varchar(255) NOT NULL,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `phone` varchar(255) DEFAULT NULL,
    `role` varchar(255) DEFAULT NULL,
    `status` varchar(255) NOT NULL DEFAULT 'Active',
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `accounts_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `accounts` (`account_type`, `name`, `email`, `phone`, `role`, `status`, `created_at`, `updated_at`) VALUES
('customer', 'Maria Santos', 'maria.santos@example.com', '+63 917 555 0101', NULL, 'Active', NOW(), NOW()),
('customer', 'Juan Dela Cruz', 'juan.delacruz@example.com', '+63 918 555 0102', NULL, 'Active', NOW(), NOW()),
('customer', 'Angela Reyes', 'angela.reyes@example.com', '+63 919 555 0103', NULL, 'Inactive', NOW(), NOW()),
('customer', 'Carlo Mendoza', 'carlo.mendoza@example.com', '+63 920 555 0104', NULL, 'Active', NOW(), NOW()),
('customer', 'Leah Garcia', 'leah.garcia@example.com', '+63 921 555 0105', NULL, 'Pending', NOW(), NOW()),
('user', 'Admin User', 'admin@example.com', NULL, 'Administrator', 'Active', NOW(), NOW()),
('user', 'Ramon Cruz', 'ramon.cruz@example.com', NULL, 'Cashier', 'Active', NOW(), NOW()),
('user', 'Sofia Lim', 'sofia.lim@example.com', NULL, 'Manager', 'Active', NOW(), NOW()),
('user', 'Nathan Tan', 'nathan.tan@example.com', NULL, 'Cashier', 'Inactive', NOW(), NOW()),
('user', 'Patricia Flores', 'patricia.flores@example.com', NULL, 'Inventory Clerk', 'Pending', NOW(), NOW());

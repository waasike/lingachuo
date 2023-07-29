-- Create database lingachuo
CREATE DATABASE lingachuo;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Create table messages
CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create table users
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Create table customers
CREATE TABLE `customers` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `customerfname` varchar(255) NOT NULL,
  `customerlname` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `customeremail` varchar(255) NOT NULL,
  `customerphoneno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Insert values into table customers
INSERT INTO `customers` (`user_id`, `unique_id`, `customerfname`, `customerlname`, `product`, `customeremail`, `customerphoneno`) VALUES
(1, 51, 'Mitchelle', 'Wasike', 'mabuyu', 'wasike@gmail.com', '0746795376');


-- Insert values into table users
INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `school`, `email`, `password`, `img`, `status`) VALUES
(1, 517207885, 'Mitchelle', 'Wasike', 'riara', 'mitchelle.wasike@riarauniversity.com', '664544ff4de537c6af6d7398096ddb9a', 'mitchelle.jpg', 'Active now');

-- Make msg_id in table messages the primary key
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

-- Make user_id in table users the primary key
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

-- Make customer_id in table customers the primary key
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_id`);

-- Auto increment msg_id in table messages
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

-- Auto increment user_id in table users
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- Auto increment customer_id in table customers
ALTER TABLE `customers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;




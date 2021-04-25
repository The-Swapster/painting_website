-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 25, 2021 at 04:35 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `painting`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `emailid` varchar(1000) NOT NULL,
  `upassword` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`emailid`, `upassword`) VALUES
('mohansharma@gmail.com', 'ganpati'),
('vaibhavsoni@gmail.com', 'ganpati');

-- --------------------------------------------------------

--
-- Table structure for table `paintin`
--

CREATE TABLE `paintin` (
  `paintingid` varchar(4) NOT NULL,
  `bid` varchar(100) NOT NULL,
  `emailid` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paintin`
--

INSERT INTO `paintin` (`paintingid`, `bid`, `emailid`) VALUES
('P001', '1000', 'swapnilsingh125@gmail.com'),
('P002', '2000', 'swapnilsingh125@gmail.com'),
('P003', '0', ''),
('P004', '0', ''),
('P005', '1000', 'vaibhavsoni@gmail.com'),
('P006', '0', ''),
('P007', '0', ''),
('P008', '1000', 'swapnilsingh125@gmail.com'),
('P009', '1000', 'swapnilsingh125@gmail.com'),
('P010', '0', ''),
('P011', '0', ''),
('P012', '0', ''),
('P013', '0', ''),
('P014', '0', ''),
('P015', '0', ''),
('P016', '0', ''),
('P017', '0', ''),
('P018', '0', ''),
('P019', '0', ''),
('P020', '0', ''),
('P021', '0', ''),
('P022', '0', ''),
('P023', '5000', 'swapnilsingh125@gmail.com'),
('P024', '0', ''),
('P025', '0', ''),
('P026', '0', ''),
('P027', '0', ''),
('P028', '0', ''),
('P029', '0', ''),
('P030', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `firstname` varchar(1000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `emailid` varchar(1000) NOT NULL,
  `dateofbirth` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `artist` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `emailid`, `dateofbirth`, `sex`, `password`, `phoneno`, `address`, `artist`, `type`) VALUES
('Mohan', 'Sharma', 'mohansharma@gmail.com', '2000-09-25', 'Male', 'ganpati', '8850365599', 'Mumbai, India', 'Scarlet Davies', 'Water Colour'),
('Vaibhav', 'Soni', 'vaibhavsoni@gmail.com', '2000-08-24', 'Male', 'ganpati', '9819094106', '401, Vandana Apartment, 13, Borbhat Lane, Girgaon, Mumbai - 400004', 'Ethan Wilson', 'Oil-Painting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `paintin`
--
ALTER TABLE `paintin`
  ADD PRIMARY KEY (`paintingid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`emailid`),
  ADD UNIQUE KEY `address` (`address`),
  ADD UNIQUE KEY `phoneno` (`phoneno`);

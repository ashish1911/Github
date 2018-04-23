-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 07:03 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adaptive`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `aid` int(11) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`aid`, `aname`, `aemail`, `apass`) VALUES
(1, 'admin', 'admin@admin.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `personality` varchar(20) NOT NULL,
  `objective` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`pid`, `uid`, `personality`, `objective`) VALUES
(1, 9, 'Extrovert', 'Project'),
(2, 5, 'Introvert', 'learning');

-- --------------------------------------------------------

--
-- Table structure for table `question_1`
--

CREATE TABLE `question_1` (
  `uid` int(11) NOT NULL,
  `q1` varchar(1) NOT NULL,
  `q2` varchar(1) NOT NULL,
  `q3` varchar(1) NOT NULL,
  `q4` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_1`
--

INSERT INTO `question_1` (`uid`, `q1`, `q2`, `q3`, `q4`) VALUES
(1, 'A', 'A', 'A', 'A'),
(2, 'B', 'B', 'B', 'B'),
(3, 'A', 'A', 'A', 'A'),
(4, 'C', 'B', 'A', 'A'),
(5, 'A', 'B', 'A', 'A'),
(6, 'C', 'B', 'B', 'C'),
(8, 'B', 'B', 'B', 'B'),
(9, 'C', 'C', 'C', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `topic_1`
--

CREATE TABLE `topic_1` (
  `tid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sname` varchar(25) NOT NULL,
  `descp` text NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `intro` text NOT NULL,
  `algo` text NOT NULL,
  `flow` text NOT NULL,
  `eg` text NOT NULL,
  `impl` text NOT NULL,
  `video` text NOT NULL,
  `aid` int(11) NOT NULL,
  `date` date NOT NULL,
  `count` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic_1`
--

INSERT INTO `topic_1` (`tid`, `name`, `sname`, `descp`, `keyword`, `type`, `intro`, `algo`, `flow`, `eg`, `impl`, `video`, `aid`, `date`, `count`, `status`) VALUES
(1, 'Graph', 'BFS', 'Breadth-first search (BFS) is an algorithm for traversing or searching tree or graph data structures.', '["bfs","graph"]', 'DS', 'Bfs_Intro.docx', 'Bfs_Algo.docx', 'Bfs_Flow.docx', 'Bfs_Ex.docx', 'Bfs_Imple.docx', 'Bfs_Video.docx', 1, '2018-04-03', 1, 0),
(2, 'Graph', 'DFS', 'Depth-first search (DFS) is an algorithm for traversing or searching tree or graph data structures', '["dfs","graph"]', 'DS', 'Dfs_Intro.docx', 'Dfs_Algo.docx', 'Dfs_Flow.docx', 'Dfs_Ex.docx', 'Dfs_Impl.docx', 'Dfs_Video.docx', 1, '2018-04-03', 2, 0),
(3, 'Sorting', 'Bubble Sort', 'Bubble Sort is an algorithm which is used to sort N elements that are given in a memory.', '["sorting","bubble sort","bubble","sort"]', 'DS', 'Bubble_sort_Intro.docx', 'Bubble_sort_Algo.docx', 'Bubble_sort_Flow.docx', 'Bubble_sort_Ex.docx', 'Bubble_sort_Impl.docx', 'Bubble_sort_Video.docx', 1, '2018-04-10', 3, 1),
(4, 'Sorting', 'Quick Sort', 'Quick sort is based on the divide-and-conquer approach based on the idea of choosing one element as a pivot element and partitioning the array.', '["sorting","quick sort","quick"]', 'DS', 'Quick_sort_Intro.docx', 'Quick_sort_Algo.docx', 'Quick_sort_Flow.docx', 'Quick_sort_Ex.docx', 'Quick_sort_Impl.docx', 'Quick_sort_Video.docx', 1, '2018-04-10', 7, 0),
(5, 'Sorting', 'Merge Sort', 'Merge sort is a divide-and-conquer algorithm based on the idea of breaking down a list into several sub-lists until each sublist consists of a single element and merging those sublists in a manner that results into a sorted list.', '["Merge sort"," sorting","Merge"]', 'DS', 'Merge_sort_Intro.docx', 'Merge_sort_Algo.docx', 'Merge_sort_Flow.docx', '', '', 'Merge_sort_Video.docx', 1, '2018-04-03', 5, 0),
(6, 'Tree', 'Red Black Tree', 'Red Black Tree is a Binary Search Tree in which every node is coloured either RED or BLACK.', '["Tree"," Red"," Black"," Search"]', 'DS', 'Red_Black_Tree_Intro.docx', 'Red_Black_Tree_Algo.docx', 'Red_Black_Tree_Flow.docx', 'Red_Black_Tree_Ex.docx', 'Red_Black_Tree_Impl.doc', 'Red_Black_Tree_Video.docx', 1, '2018-04-13', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `uid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `name`, `email`, `pass`) VALUES
(3, 'qwerty', 'qwerty@qwerty.com', '123456'),
(5, 'Niraj Sharma', 'nirajshar67@gmail.com', '123456'),
(6, 'Lokesh Singh', 'lokeshsingh417@gmail.com', '123456'),
(8, 'Arnold', 'arnolddsouza1607@gmail.com', 'abcd'),
(9, 'New User', 'user@user.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `topic_1`
--
ALTER TABLE `topic_1`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `topic_1`
--
ALTER TABLE `topic_1`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

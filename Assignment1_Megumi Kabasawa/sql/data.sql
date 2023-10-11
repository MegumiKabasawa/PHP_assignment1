
CREATE TABLE `fallVoteData` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `vote` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fallVoteData`
--

INSERT INTO `fallVoteData` (`id`, `name`, `email`, `vote`, `message`) VALUES
(1, 'John Doe', 'person1@example.com', 'Hat', 'aaa'),
(2, 'Alice Smith', 'person2@example.com', 'Beret', 'This is great!'),
(3, 'Robert Johnson', 'person3@example.com', 'Cap', 'Excellent work!'),
(4, 'Emily Wilson', 'person4@example.com', 'Beret', 'Impressive'),
(5, 'Michael Brown', 'person5@example.com', 'Hat', 'Well done!'),
(6, 'Sarah Davis', 'person6@example.com', 'Hat', 'Outstanding.'),
(7, 'David Miller', 'person7@example.com', 'Beret', 'This is great!');
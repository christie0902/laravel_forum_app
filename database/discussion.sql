--
-- Truncate table before insert `questions`
--
TRUNCATE TABLE `questions`;

--
-- Dumping data for table `questions`
--
INSERT INTO `questions` (`id`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Where can I find the Laravel documentation?', 'Hi, I am new to Laravel and as I don''t know how to use Google I can''t seem to find the documentation.\r\n\r\nCan anyone help me?', '2018-02-23 22:28:01', '2018-02-23 22:28:01'),
(2, 'What is the real answer to life, universe and everything?', 'Hi!\r\n\r\nThis question is bugging me for many years now.\r\n\r\nWhy are we all here? Where do we come from and where are we going? What is the answer to it all? \r\n\r\nAny help would be much appreciated.', '2018-02-25 18:28:01', '2018-02-25 18:28:01');

--
-- Truncate table before insert `answers`
--
TRUNCATE TABLE `answers`;

--
-- Dumping data for table `answers`
--
INSERT INTO `answers` (`id`, `question_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 'That''s a tough one. Hopefully someone will be able to help you (not me).', '2018-02-23 23:30:07', '2018-02-23 23:30:07'),
(2, 1, 'You''re kidding, right?\r\n\r\nhttps://laravel.com/docs/5.6', '2018-02-24 15:30:07', '2018-02-24 15:30:07'),
(3, 1, 'Thanks a lot! That is what I was looking for.', '2018-02-24 16:30:07', '2018-02-24 16:30:07'),
(4, 2, 'Well, it''s nothing very special. Uh, try to be nice to people, avoid eating fat, read a good book every now and then, get some walking in, and try to live together in peace and harmony with people of all creeds and nations.', '2018-02-25 19:32:17', '2018-02-25 19:32:17'),
(5, 2, '41', '2018-02-25 20:32:17', '2018-02-25 20:32:17'),
(6, 2, '42', '2018-02-25 21:16:21', '2018-02-25 21:16:21'),
(7, 2, 'Yeah, 42 sounds about right... but what is the question?', '2018-02-25 21:25:21', '2018-02-25 21:25:21');

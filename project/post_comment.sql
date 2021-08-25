CREATE TABLE post_comment (
  id int(11) NOT NULL,
  name varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  comment text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table contact_us
--
ALTER TABLE post_comment
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table contact_us
--
ALTER TABLE post_comment
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
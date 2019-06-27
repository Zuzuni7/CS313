# drop tables
DROP TABLE VIDEOS;
DROP TABLE VIDEO_TYPES;
DROP TABLE COURSES;

# create tables
CREATE TABLE COURSES(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    description VARCHAR(500) NOT NULL);
CREATE TABLE VIDEO_TYPE(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(30) NOT NULL);
CREATE TABLE VIDEOS(
    id SERIAL NOT NULL PRIMARY KEY,
    course_id INT NOT NULL REFERENCES COURSES(id),
    videoType_id INT NOT NULL REFERENCES VIDEO_TYPE(id),
    url VARCHAR(200) NOT NULL,
    name VARCHAR(200) NOT NULL,
    description VARCHAR(500) NOT NULL,
    creationDate VARCHAR(10),
    publicBool BOOLEAN NOT NULL,
    goPublicDate VARCHAR(10), 
    backupBool BOOLEAN NOT NULL);

# FROM COMMAND LINE
CREATE TABLE COURSES(id SERIAL NOT NULL PRIMARY KEY,name VARCHAR(200) NOT NULL,description VARCHAR(500) NOT NULL);
CREATE TABLE VIDEO_TYPES(id SERIAL NOT NULL PRIMARY KEY,name VARCHAR(30) NOT NULL);
CREATE TABLE VIDEOS(id SERIAL NOT NULL PRIMARY KEY,course_id INT NOT NULL REFERENCES COURSES(id),videoType_id INT NOT NULL REFERENCES VIDEO_TYPES(id),url VARCHAR(200) NOT NULL,name VARCHAR(200) NOT NULL,description VARCHAR(500) NOT NULL,creationDate DATE,publicBool BOOLEAN NOT NULL,goPublicDate DATE, backupBool BOOLEAN NOT NULL);

# insert into tables
# INSERT INTO COURSES(id, name, description)...
INSERT INTO COURSES VALUES (1, 'CIT160', 'Intro to Programming (JavaScript, HTML');
INSERT INTO COURSES VALUES (2, 'CS124', 'Intro to Programming (C++)');
INSERT INTO COURSES VALUES (3, 'CS313', 'Web Engineering 2 (PHP, Heroku, PostgreSQL)');
# INSERT INTO VIDEO_TYPES(id, name)...
INSERT INTO VIDEO_TYPES VALUES (1, 'Assignment Introduction');
INSERT INTO VIDEO_TYPES VALUES (2, 'Assignment Walkthrough');
INSERT INTO VIDEO_TYPES VALUES (3, 'Live Classroom Recording');
INSERT INTO VIDEO_TYPES VALUES (4, 'Exam Preparation');
INSERT INTO VIDEO_TYPES VALUES (5, 'Completed Program');
INSERT INTO VIDEO_TYPES VALUES (6, 'Miscellaneous');
INSERT INTO VIDEO_TYPES VALUES (7, 'Instructor Thoughts');
INSERT INTO VIDEO_TYPES VALUES (8, 'Exam Walkthrough');

# INSERT INTO VIDEOS(id, course_id, videoType_id, url, name, description, creationDate, publicBool, goPublicDate, backupBool)...
INSERT INTO VIDEOS VALUES (1, 1, 1, 'http://www.youtube.com/watch?v=VvR_mCtSmuc', 'Assignment 2 Introduction', 'This video introduces Assignment 2 of the course, Robbie the Robot.', to_date('2019-01-13', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (2, 1, 1, 'https://youtu.be/eH_zRfy4SC0', 'Assignment 3 Introduction', 'This video introduces Assignment 3 of the course, regarding basic HTML.', to_date('2019-01-20', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (3, 1, 1, 'https://youtu.be/QAqO9Fy_Gu8', 'Assignment 4 Introduction', 'This video introduces Assignment 4 of the course, regarding basic JavaScript.', to_date('2019-01-27', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (4, 1, 1, 'https://youtu.be/iCqVfLPDC4c', 'Assignment 5 Introduction', 'This video introduces Assignment 5 of the course.', to_date('2019-02-03', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (5, 1, 1, 'https://youtu.be/ce4qOWQvseM', 'Assignment 6 Introduction', 'This video introduces Assignment 6 of the course.', to_date('2019-02-10', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (6, 1, 1, 'https://youtu.be/GB-PPT5zTl0', 'Assignment 7 Introduction', 'This video introduces Assignment 7 of the course.', to_date('2019-02-17', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (7, 1, 1, 'https://youtu.be/OfZsgr0I2o8', 'Assignment 8 Introduction', 'This video introduces Assignment 8 of the course.', to_date('2019-02-24', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (8, 1, 1, 'https://youtu.be/wIDiiEtpNaU', 'Assignment 9 Introduction', 'This video introduces Assignment 9 of the course.', to_date('2019-03-03', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (9, 1, 1, 'https://youtu.be/FOZ8bo8rJyA', 'Assignment 10 Introduction', 'This video introduces Assignment 10 of the course.', to_date('2019-03-10', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (10, 1, 1, 'https://youtu.be/H3g8lkzp08A', 'Assignment 11 Introduction', 'This video introduces Assignment 11 of the course.', to_date('2019-03-04', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (11, 1, 1, 'https://youtu.be/B9uQF9BVrMA', 'Assignment 12 Introduction', 'This video introduces Assignment 12 of the course.', to_date('2018-11-27', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (12, 1, 1, 'https://youtu.be/vwj3FQxMXhI', 'Assignment 13 Introduction', 'This video introduces Assignment 13 of the course.', to_date('2019-03-31', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (13, 1, 1, 'https://youtu.be/9RHBzvFvSjU', 'Week 13 Extra Credit Introduction', 'This video introduces Assignment 13 Extra Credit of the course.', to_date('2019-03-31', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (14, 1, 2, 'https://youtu.be/gj1sM8dnwbY', 'Assignment 2 Walkthrough', 'This video Completes the Assignment 2 of the course and shows how the instructor completed it.', to_date('2019-01-20', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (15, 1, 2, 'https://youtu.be/UN-3Mr8Avjc', 'Assignment 3 Walkthrough', 'This video Completes the Assignment 3 of the course and shows how the instructor completed it.', to_date('2019-01-27', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (16, 1, 2, 'https://youtu.be/JGhUk8Rg0vQ', 'Assignment 4 Walkthrough', 'This video Completes the Assignment 4 of the course and shows how the instructor completed it.', to_date('2019-02-03', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (17, 1, 2, 'https://youtu.be/KEdQU0ODyD8', 'Assignment 5 Walkthrough', 'This video Completes the Assignment 5 of the course and shows how the instructor completed it.', to_date('2019-02-10', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (18, 1, 2, 'https://youtu.be/EK5wfiDnPPA', 'Assignment 6 Walkthrough', 'This video Completes the Assignment 6 of the course and shows how the instructor completed it.', to_date('2019-02-17', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (19, 1, 2, 'https://youtu.be/sCpS3RLaYaU', 'Assignment 7 Walkthrough', 'This video Completes the Assignment 7 of the course and shows how the instructor completed it.', to_date('2019-02-24', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (20, 1, 2, 'https://youtu.be/FJi1o5WgWAE', 'Assignment 8 Walkthrough', 'This video Completes the Assignment 8 of the course and shows how the instructor completed it.', to_date('2019-03-03', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (21, 1, 2, 'https://youtu.be/r2GLE__wejQ', 'Assignment 9 Walkthrough', 'This video Completes the Assignment 9 of the course and shows how the instructor completed it.', to_date('2019-03-10', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (22, 1, 2, 'https://youtu.be/z_FwoPrvuCg', 'Assignment 10 Walkthrough', 'This video Completes the Assignment 10 of the course and shows how the instructor completed it.', to_date('2019-03-04', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (23, 1, 2, 'https://youtu.be/4iFffY6ryAU', 'Assignment 11 Walkthrough', 'This video Completes the Assignment 11 of the course and shows how the instructor completed it.', to_date('2018-11-27', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (24, 1, 2, 'https://youtu.be/HZdlI9NhB0k', 'Assignment 12 Walkthrough', 'This video Completes the Assignment 12 of the course and shows how the instructor completed it.', to_date('2019-03-31', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (25, 1, 2, 'https://youtu.be/T_-fCshnqj4', 'Assignment 13 Walkthrough', 'This video Completes the Assignment 13 of the course and shows how the instructor completed it.', to_date('2019-03-31', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (26, 1, 2, 'https://youtu.be/iBVfTKgNwHQ', 'Extra Credit Assignment Walkthrough', 'This video Completes the Extra Credit Assignment of week 13 and shows how the instructor completed it.', to_date('2019-04-07', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (27, 1, 5, 'http://www.youtube.com/watch?v=ySAggPNomiA', 'Ch 3. Exercise 1', 'This video starts and finishes this programming exercise at the end of the chapter.', to_date('2019-04-11', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (28, 1, 5, 'https://www.youtube.com/watch?v=RB2-mLpUUuI', 'Ch 4. Exercise 3', 'This video starts and finishes this programming exercise at the end of the chapter.', to_date('2019-04-11', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (29, 1, 5, 'http://www.youtube.com/watch?v=VNtgepAlN2w', 'Ch 5. Exercise 3', 'This video starts and finishes this programming exercise at the end of the chapter.', to_date('2019-04-11', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (30, 1, 5, 'http://www.youtube.com/watch?v=1ert5cv22sA', 'Ch 6. Exercise 1', 'This video starts and finishes this programming exercise at the end of the chapter.', to_date('2019-04-11', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (31, 1, 5, 'http://www.youtube.com/watch?v=qi4BTXrDVn4', 'Ch 7. Exercise 1', 'This video starts and finishes this programming exercise at the end of the chapter.', to_date('2019-04-11', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (32, 1, 5, 'http://www.youtube.com/watch?v=RXpCn4VTnys', 'Ch 8, Exercise 1', 'This video starts and finishes this programming exercise at the end of the chapter.', to_date('2019-04-11', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (33, 1, 5, 'http://www.youtube.com/watch?v=unvHNZYqHCQ', 'Ch 8, Exercise 10', 'This video starts and finishes this programming exercise at the end of the chapter.', to_date('2019-04-11', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (34, 1, 5, 'http://www.youtube.com/watch?v=nYTK3Co5my0', 'Ch 9. Exercise 2', 'This video starts and finishes this programming exercise at the end of the chapter.', to_date('2019-04-11', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (35, 1, 5, 'http://www.youtube.com/watch?v=WcWblz57XB4', 'Ch 9. Exercise 6', 'This video starts and finishes this programming exercise at the end of the chapter.', to_date('2019-04-11', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (36, 1, 5, 'http://www.youtube.com/watch?v=nLueq8vZDMo', 'Ch 10. Exercise 1', 'This video starts and finishes this programming exercise at the end of the chapter.', to_date('2019-04-11', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (37, 1, 5, 'http://www.youtube.com/watch?v=3kTrCUVaJgs', 'Ch 10. Exercise 11', 'This video starts and finishes this programming exercise at the end of the chapter.', to_date('2019-04-11', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (38, 1, 6, 'http://www.youtube.com/watch?v=Jb8XU-bqNWE', 'Text Editors (VS Code and Sublime)', 'This video is meant to help students with these topics.', to_date('2019-02-02', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (39, 1, 6, 'http://www.youtube.com/watch?v=RB2-mLpUUuI', 'Sublime - Making Template File (Ch.4)', 'This video is meant to help students with these topics.', to_date('2019-02-02', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (40, 1, 6, 'http://www.youtube.com/watch?v=OgyYTIZpN20', 'Chrome Developer Tools 1 - Elements', 'This video is meant to help students with these topics.', to_date('2019-02-02', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (41, 1, 6, 'https://youtu.be/5Xpex3C0ITY', 'Chrome Developer Tools 2 - Console', 'This video is meant to help students with these topics.', to_date('2019-02-02', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (42, 1, 6, 'https://youtu.be/H0aJ-HU_Ijg', 'Chrome Developer Tools 3 - Sources', 'This video is meant to help students with these topics.', to_date('2019-02-02', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (43, 1, 6, 'http://www.youtube.com/watch?v=CQD9oNcLCxE', 'Sublime Hotkeys', 'This video is meant to help students with these topics.', to_date('2019-02-02', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (44, 1, 3, 'https://byui.zoom.us/recording/share/R6KBtTa8knSia-W5XNvD2xYpBv74p7x3St1AU1UogquwIumekTziMw?startTime=1556038907000', 'Week 1 Live Classroom', 'This video consists of the live classroom of Week 1 of 2019,Spring semester.', to_date('2019-04-23', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (45, 1, 3, 'https://byui.zoom.us/recording/share/69zUQA8rHPucQkOYPdP2eMxJkh8pVIaAtTQe3mane-mwIumekTziMw?startTime=1556643708000', 'Week 2 Live Classroom', 'This video consists of the live classroom of Week 2 of 2019,Spring semester.', to_date('2019-04-30', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (46, 1, 3, 'https://byui.zoom.us/recording/share/BF8IuNr58GBlZJB90IobZ3pAhnGt-coC-YOUw7wSrRE?startTime=1557248580000', 'Week 3 Live Classroom', 'This video consists of the live classroom of Week 3 of 2019,Spring semester.', to_date('2019-05-07', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (47, 1, 3, 'https://byui.zoom.us/recording/share/5uS1bOIlT0ZH7MZl9rfcPFU_uBHs4NiduC6OgIyT5H6wIumekTziMw?startTime=1557853266000', 'Week 4 Live Classroom', 'This video consists of the live classroom of Week 4 of 2019,Spring semester.', to_date('2019-05-14', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (48, 1, 3, 'https://byui.zoom.us/recording/share/G5no2Qox13VrKDk91zyTSbJGyIsm25jdZFbp6wyTkZuwIumekTziMw?startTime=1558458183000', 'Week 5 Live Classroom', 'This video consists of the live classroom of Week 5 of 2019,Spring semester.', to_date('2019-05-21', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (49, 1, 3, 'https://byui.zoom.us/recording/share/u3NWK1GW8C0r60p70sUQ6UOlABPsoocLuAzZWMuKnTywIumekTziMw?startTime=1559063069000', 'Week 6 Live Classroom', 'This video consists of the live classroom of Week 6 of 2019,Spring semester.', to_date('2019-05-28', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (50, 1, 3, 'https://byui.zoom.us/recording/share/NTumezpmsnAxGDg1w-qO20Pu-axKRpxj0YM_fuoHXB2wIumekTziMw?startTime=1559667659000', 'Week 7 Live Classroom', 'This video consists of the live classroom of Week 7 of 2019,Spring semester.', to_date('2019-06-04', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (51, 1, 3, 'https://byui.zoom.us/recording/share/KPaDI-Nl5_k5PnlpRE2vWS6tBBH71G7_m3WCMzSTwCiwIumekTziMw?startTime=1560272484000', 'Week 8 Live Classroom', 'This video consists of the live classroom of Week 8 of 2019,Spring semester.', to_date('2019-06-11', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (52, 1, 3, 'https://youtu.be/Z6JyCIi1Gng', 'Week 9 Live Classroom', 'This video consists of the live classroom of Week 9 of 2019,Spring semester.', to_date('2019-06-18', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (53, 1, 3, 'https://byui.zoom.us/recording/share/nhPTyd6-fXWKoHc0vZkbuCOGVJZFoFbPHbfmxFj37-CwIumekTziMw?startTime=1561482127000', 'Week 10 Live Classroom', 'This video consists of the live classroom of Week 10 of 2019,Spring semester.', to_date('2019-06-25', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (54, 1, 4, 'https://byui.zoom.us/recording/share/G5no2Qox13VrKDk91zyTSbJGyIsm25jdZFbp6wyTkZuwIumekTziMw?startTime=1558461510000', 'Exam 1 Preparation', 'This video introduces Exam 1, including the rules and policies, and reviews the practice exam.', to_date('2019-05-21', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (55, 1, 4, 'https://youtu.be/tPbzQjqA5Ts', 'Exam 2 Preparation', 'This video introduces Exam 2, including the rules and policies, and reviews the practice exam.', to_date('2019-06-18', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (56, 1, 3, 'https://youtu.be/l2Tt_pkjE8I', 'Week 1 Live Classroom', 'This video consists of the live classroom of Week 1 of 2018, Fall semester.', to_date('2018-09-20', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (57, 1, 3, 'https://youtu.be/NJIcYl35q9M', 'Week 2 Live Classroom', 'This video consists of the live classroom of Week 2 of 2018, Fall semester.', to_date('2018-09-27', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (58, 1, 3, 'https://youtu.be/mIgAx6fdb9c', 'Week 3 Live Classroom', 'This video consists of the live classroom of Week 3 of 2018, Fall semester.', to_date('2018-10-03', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (59, 1, 3, 'https://youtu.be/sUtYFmi_mBM', 'Week 4 Live Classroom', 'This video consists of the live classroom of Week 4 of 2018, Fall semester.', to_date('2018-10-10', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (60, 1, 3, 'https://www.youtube.com/watch?v=7OouLHHuAic&feature=youtu.be', 'Week 5 Live Classroom', 'This video consists of the live classroom of Week 5 of 2018, Fall semester.', to_date('2018-10-17', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (61, 1, 3, 'https://www.youtube.com/watch?v=1AmDZ_73a70&feature=youtu.be', 'Week 6 Live Classroom', 'This video consists of the live classroom of Week 6 of 2018, Fall semester.', to_date('2018-10-24', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (62, 1, 3, 'https://youtu.be/l2Tt_pkjE8I', 'Week 7 Live Classroom', 'This video consists of the live classroom of Week 7 of 2018, Fall semester.', to_date('2018-11-03', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (63, 1, 3, 'https://youtu.be/cAeh246CqDs', 'Week 8 Live Classroom', 'This video consists of the live classroom of Week 8 of 2018, Fall semester.', to_date('2018-11-10', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (64, 1, 3, 'https://youtu.be/QSxiWvEcL3U', 'Week 9 Live Classroom', 'This video consists of the live classroom of Week 9 of 2018, Fall semester.', to_date('2018-11-17', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (65, 1, 3, 'https://youtu.be/eM8fEtIbW1Q', 'Week 10 Live Classroom', 'This video consists of the live classroom of Week 10 of 2018, Fall semester.', to_date('2018-11-24', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (66, 1, 3, 'https://youtu.be/9KiBMw1yjZ8', 'Week 11 Live Classroom', 'This video consists of the live classroom of Week 11 of 2018, Fall semester.', to_date('2018-11-30', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (67, 1, 3, 'https://youtu.be/UFJcXx8TIWs', 'Week 12 Live Classroom', 'This video consists of the live classroom of Week 12 of 2018, Fall semester.', to_date('2018-12-07', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (68, 1, 3, 'https://youtu.be/wWqWqMrMOYs', 'Week 13 Live Classroo', 'This video consists of the live classroom of Week 13 of 2018, Fall semester.', to_date('2018-12-14', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (69, 1, 7, 'http://www.youtube.com/watch?v=iFuUAvNo1YY', 'Week 9 Instructor Thoughts', 'Video contains debugging example and talks about the importance of finding answers.', to_date('2019-06-17', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (70, 1, 6, 'https://youtu.be/iiLWb_WYGZs', 'iLearn Tutorial', 'Brief runthrough of iLearn.', to_date('2019-09-15', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (71, 1, 6, 'https://youtu.be/0alVp2GrdZ0', 'Career Discussion', 'This video is of a Live Classroom that was a Career Discussion, Q/A Style.', to_date('2019-09-29', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (72, 1, 4, 'https://youtu.be/1Mc-5PR9xuY', 'Exam 1 Preparation', 'Runthrough of what to expect on Exam 1.', to_date('2019-02-15', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (73, 1, 4, 'https://youtu.be/TikyWd8B4pA', 'Exam 2 Preparation', 'Runthrough of what to expect on Exam 2.', to_date('2019-03-20', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (74, 1, 4, 'https://youtu.be/uL3DnM78gLo', 'Exam 3 Preparation', 'Runthrough of what to expect on Exam 3.', to_date('2019-04-15', 'YYYY-MM-DD'), TRUE, null, TRUE);
INSERT INTO VIDEOS VALUES (75, 1, 8, 'https://youtu.be/AUFhyaYgwZo', 'Exam 1 Walkthrough', 'Walkthrough of Exam 1.', to_date('2019-02-22', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (76, 1, 8, 'https://youtu.be/bw0L0pvzt2Q', 'Exam 2 Walkthrough', 'Walkthrough of Exam 2.', to_date('2019-03-27', 'YYYY-MM-DD'), TRUE, null, FALSE);
INSERT INTO VIDEOS VALUES (77, 1, 8, 'https://youtu.be/zaeZTri125k', 'Exam 3 Walkthrough', 'Walkthrough of Exam 3.', to_date('2019-04-22', 'YYYY-MM-DD'), TRUE, null, FALSE);

# TODO - figure out how to run procedure to update goPublicDate on all assignment intros and walkthroughs

596. Classes More Than 5 Students

問題：Courses 資料表以 (student, class) 為主鍵記錄了選課資訊，列出學生有超過四位的課程。

-----
解一：
- SELECT class FROM Courses GROUP BY class HAVING COUNT(*)>=5;
- SELECT class FROM Courses GROUP BY class HAVING COUNT(student)>=5;

1741. Find Total Time Spent by Each Employee

問題：Employees 資料表記錄了打卡資料，請依員工為單位，分日列出其總出勤時長。

-----
解一：SUM+GROUP BY 分組彙總

- SELECT event_day day, emp_id, SUM(out_time-in_time) total_time FROM Employees GROUP BY day, emp_id;
- SELECT event_day day, emp_id, SUM(out_time)-SUM(in_time) total_time FROM Employees GROUP BY day, emp_id;

[常見錯誤]

- SELECT event_day day, emp_id, MAX(out_time-in_time) total_time FROM Employees GROUP BY day, emp_id; (僅輸出計算結果最大的一筆)

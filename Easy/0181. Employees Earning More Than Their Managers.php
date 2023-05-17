181. Employees Earning More Than Their Managers

問題：Employee 資料表記錄了員工的薪資及主管資訊，找出所有薪資高於主管的員工。

-----
解一：SELF-JOIN。

- SELECT a.name Employee FROM Employee a, Employee b WHERE a.managerId=b.id AND a.salary>b.salary;
- SELECT a.name Employee FROM Employee a JOIN Employee b ON a.managerId=b.id WHERE a.salary>b.salary;

-----
解二：關聯子查詢，利用 managerId 做為內外相依的查詢條件。

- SELECT a.name Employee FROM Employee a WHERE a.salary>(SELECT b.salary FROM Employee b WHERE a.managerId=b.id);

[常見錯誤]

- SELECT name Employee FROM Employee WHERE salary>(SELECT salary FROM Employee); (子查詢多於一行，或無法一對一關聯比較)

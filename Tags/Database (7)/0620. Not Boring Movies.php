620. Not Boring Movies

問題：Cinema 資料表記錄了電影資訊，依電影評分由高至低列出編號奇數、且評論不為 boring 的電影。

-----
解一：
- SELECT * FROM Cinema WHERE id%2=1 AND description!="boring" ORDER BY rating DESC;
- SELECT * FROM Cinema WHERE id mod 2 AND description!="boring" ORDER BY rating DESC;

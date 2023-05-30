1207. Unique Number of Occurrences

1. 索引：N 種數字要有 N 種取值，遍歷計數後比對 key 數量＝Set(value) 大小。

2. 承上，鍵、值必成對，數字種類也可以從 value 數量、Set(arr) 取得。

3. 定量桶：對所有數字計數後，篩選頻率非零者檢查 bucket 長度＝Set(bucket) 大小。

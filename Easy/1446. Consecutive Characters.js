1446. Consecutive Characters

(類題：485. Max Consecutive Ones)

1. 計數：當前頻率＝1 起計，逐位比對與前者相同與否，累加並覆蓋最大值。

2. 雙指針法：快針持續往下比對，當相異時結算一次距離，完成後兩針會合。

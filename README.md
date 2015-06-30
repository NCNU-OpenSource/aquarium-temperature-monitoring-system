# aquarium-temperature-monitoring-system

##題目發想緣起
看到家裡的魚缸開關燈、餵食、控溫....等等 好麻煩，乾脆把這些功能都把它整合起來，做成一套系統。
在這套系統裡可以遠端(如:網頁、手機app)監控(ph值、溫度、鹽度、水位...等等)
也可以控制溫度的高低、餵食的時間、開關燈的時間、CO2打氣量的時間

## 課程簡報
[連結](http://www.slideshare.net/mingxuanzhuo/pptx-49903188)

##實作所需材料（取得來源、價位）

| 材料名稱 | 取得來源 | 價格 |
| --- | --- | ---: |
| Raspberry Pi | 課堂提供 | NT$0 |
| 5V/3.3V 2路 帶隔離繼電器擴展板 AC250V 10A / DC30V 10A) | 露天拍賣 | NT$105 |
| 附插頭的電源線 | 五金行 | NT$50 |
| 插座頭 | 五金行 | NT$20 |
| 杜邦線 | 隔壁LAB好兄弟友情出售 | NT$50 |
| DS18b20 溫度傳感器 | 露天拍賣 | NT$95 |

## 使用的現有軟體與來源

- PHP
- Mysql
- Apache
- Python
- WEBIOPI

## 實作過程
### 麵包板不會接
請教隔壁大神[吳宗翰](https://www.facebook.com/zong.wu.10?fref=ts)並解聽他講解教學。聽完之後豁然開朗，一切都懂了。

## 運用哪些與課程內容中相關的技巧
- LINUX基本觀念
- 運用postfix開機後自動寄送IP至EMAIL
- APACHE + MYSQL +PHP 的安裝及架設
- GPIO基本觀念
- 解決問題的能力


## 組裝過程及製作教學
### 硬體
#### I.用Raspberry Pi 控制110V的電器
希望做到遠端開關的功能首先最需要學習的是如何控制繼電器(我們只要通過繼電器，就可以決定110V是否有通電唷!)

[DIY教學開始]

接法示意圖

![image](https://github.com/NCNU-OpenSource/aquarium-temperature-monitoring-system/blob/master/image/Pic_001_RELAY.png)
- step1 首先先將電源線剝開
- step2 將剝開的電線與插座頭其中一端焊在一起
- step3 將以已剝開的部分上，剪一小條下來，焊在另外一個接點上
- setp4 將這兩端插在N.O. 和COM 上，鎖好(如下圖)
![image](https://github.com/NCNU-OpenSource/aquarium-temperature-monitoring-system/blob/master/image/img2.jpg)
- step5 完成了
## 操作教學

## 工作分配
 - 題目想法:卓明煊
 - 程式撰寫:卓明煊
 - 系統展示:趙景暉
 - 投影片製作:卓明煊、趙景暉
 

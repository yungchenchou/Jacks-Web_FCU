// Program file name: Ex2_4.java
// subject: demo basic Input

// 引用 java.util.Scanner 函式庫
import java.util.Scanner;

public class Ex2_4 {
    public static void main(String[] args) {
        // 宣告一個名字叫做 scn 的掃描器 (Scanner)物件從系統的基本輸入設備(System.in)
        // 接收資料，這裡提到的基本輸入設備可以把它想成是 "鍵盤"
        Scanner scn = new Scanner(System.in);
        // 顯示提示訊息，讓使用者知道是要輸入什麼
        System.out.println("請輸入一段文字: ");
        // 透過 scn 物件去接收使用者輸入的整行資料 (該行資料中有空白一樣照抓不誤)，放到
        // str 的字串變數之中
        String str = scn.nextLine();
        // 將字串變數 str 中的資料列印出來
        System.out.println(str);
    }
}

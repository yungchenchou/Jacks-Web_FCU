// Program file name: Ex2_5.java
// Subject:

public class Ex2_5 {
    public static void main(String[] args) {
        // 字串資料 str1 的內容是 "亞洲大學"
        String str1 = "亞洲大學";
        // 字串資料 str2 的內容是 "資工系"
        String str2 = "資工系";
        // 列印 str1 中的資料 不換行
        System.out.print(str1);
        // 列印 str2 中的資料 不換行
        System.out.print(str2);
        // 列印 str1 中的資料後會換行
        System.out.println(str1);
        // 列印 str2 中的資料後會換行
        System.out.println(str2);
        // 列印 str1 中的資料後因為加了 "換行符號" \n 所以會換行
        System.out.print(str1 + "\n");
        // 列印 str2 的資料後不換行
        System.out.print(str2);
    }
}
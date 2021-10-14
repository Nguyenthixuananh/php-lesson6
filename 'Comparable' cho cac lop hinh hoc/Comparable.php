<?php
interface Comparable
//triển khai phương thức compareTo() để hỗ trợ so sánh
// “hơn, kém, bằng” các đối tượng của các lớp hình học
{
    public function compareTo($objTwo);
}
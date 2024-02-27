<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('products_code', 15)->primary();
            $table->string('name')->nullable();
            $table->string('details',500)->nullable();
            $table->decimal('price', 8, 0)->nullable(); // แก้ไขเป็น decimal และกำหนดความยาวและหลักทศนิยม
            $table->integer('remaining')->nullable(); 
            $table->timestamps();
        });

        $test = DB::table('products')->insert([
            [
                'products_code'=>'1',
                'name'=>'Cute Press Heart',
                'details'=>'ลิปสติกเนื้อเชียร์ให้ลุคธรรมชาติแต่เอาอยู่ มีให้เลือกมากกว่า 5 สี',
                'price' =>'149',
                'remaining' =>'15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'2',
                'name'=>'Maybelline New York Ultimatte By Color Sensational Lipstick',
                'details'=>'ลิปสติกเนื้อเชียร์ให้ลุคธรรมชาติแต่เอาอยู่ มีให้เลือกมากกว่า 5 สี',
                'price' =>'199',
                'remaining'=>'20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'3',
                'name'=>'Naree Everyday Real Sheer Lipstick',
                'details'=>'ลิปแท่งนี้เนื้อสัมผัสนุ่มลื่นมากก ทาง่ายไม่เหนียวเหนอะหนะ ให้ลุคธรรมชาติใช้ทาไปทำงานก็ได้',
                'price' =>'299',
                'remaining'=>'17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'4',
                'name'=>'Etude Fixing Tint Bar',
                'details'=>'เนื้อสัมผัสบางเบาสบายปาก ใช้ทาแล้วติดทนที่สำคัญไม่ทำให้ปากแห้ง',
                'price' =>'580',
                'remaining'=>'10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'5',
                'name'=>'3CE Mood Recipe Matte Lip Color',
                'details'=>'โทนลิปสติกสีอบอุ่น เป็นลิปแมตต์เนื้อเนียนนุ่มที่ให้สีสันแบบธรรมชาติด้วย 5 เฉดสีโทนน้ำตาล ทาแล้วกลบสีปากได้เนียนสุด ๆ',
                'price' =>'790',
                'remaining'=>'10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'6',
                'name'=>'Merrez ca Dranatic Lip Color',
                'details'=>'ลิปสติกรุ่นนี้ให้ลุค Semi-Matte ที่บางเบา ทาแล้วช่วยปกปิดสีเดิมของริมฝีปากได้เป็นอย่างดี มีส่วนผสมสารสกัดจากเปลือกมะนาว ให้กลิ่นหอมอ่อน ๆ ช่วยทำให้ปากเต่งตึง ',
                'price' =>'515',
                'remaining'=>'8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'7',
                'name'=>'Innisfree Airy Matte Lipstick',
                'details'=>'ลิปสติกเนื้อแมตต์ที่ให้สัมผัสบางเบา ผสมผสานตัวบำรุงริมฝีปากด้วย Ceramide complex และ Butter อีก 4 ชนิด ',
                'price' =>'650',
                'remaining'=>'5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'8',
                'name'=>'Bobbi Brown Crushed Lip',
                'details'=>'เป็นลิปเนื้อบาล์ม ทาแล้วจะได้ความแมตต์ซาติน สบายปากติดทนนาน',
                'price' =>'850',
                'remaining'=>'9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'9',
                'name'=>'YSL Rouge Pur Couture The Slim Glow Matte Lipstick',
                'details'=>'ลิปเนื้อแมตต์ ที่มีพิกเมนต์สด สีแน่นชัดพร้อมประกายจากชิมเมอร์เบา ๆ',
                'price' =>'1600',
                'remaining'=>'11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'10',
                'name'=>'Tom Ford Lip Color Matte',
                'details'=>'เนื้อลิปสติกเป็นแมตต์กำมะหยี่ เกลี่ยง่าย เม็ดสีชัดและสีติดทนนาน',
                'price' =>'2200',
                'remaining'=>'15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'11',
                'name'=>'Maybelline Super Stay Matte Ink',
                'details'=>'ลิปสติกที่ขึ้นชื่อในเรื่องความติดทนนานทางแบรนด์เคลมมาว่าติดทนนานถึง 16 ชม. มาพร้อมคุณสมบัติ “Kiss proof”',
                'price' =>'219',
                'remaining'=>'30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'12',
                'name'=>'L oreal Paris Makeup Rouge Signature Matte Ink Liquid',
                'details'=>'เนื้อสัมผัสของลิปสติกมีความบางเบา ทาง่ายและไม่หนักปาก',
                'price' =>'279',
                'remaining'=>'24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'13',
                'name'=>'4U2 Est.Harder ลิปสติก',
                'details'=>'ลิปสติกเนื้อแมตต์ ทาง่าย ติดทนยาวนานแต่ไม่ติดแมสก์',
                'price' =>'100',
                'remaining'=>'40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'14',
                'name'=>'Charlotte Tilbury The Super Nudes Matte Revolution',
                'details'=>'มีส่วนผสมบำรุงริมฝีปากจากธรรมชาติหลากหลายชนิดป้องกันไม่ให้ริมฝีปากแห้ง',
                'price' =>'1350',
                'remaining'=>'7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'15',
                'name'=>'Maybelline Super Stay Vinyl Ink Lip',
                'details'=>'กันน้ำได้อย่างมีประสิทธิภาพ เม็ดสีแน่นกลบสีปากเดิมได้ดี',
                'price' =>'239',
                'remaining'=>'3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'16',
                'name'=>'Chanel Le Rouge Duo Ultra Tenue Ultrawear Liquid lip Color',
                'details'=>'ลิปสติกตอบโจทย์คนที่ต้องการลิปสติกติดทนนาน ไม่หลุดลอกตลอดทั้งวัน',
                'price' =>'1650',
                'remaining'=>'5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'17',
                'name'=>'MAC Powder Kiss Lipstick',
                'details'=>'ลิปสติกแบบใหม่ซอฟต์โฟกัสจะช่วยเบลอนำทางปากและขอบปากได้ดี',
                'price' =>'945',
                'remaining'=>'5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'18',
                'name'=>'Dior Addict Hydrating Shine Lipstick',
                'details'=>'ลิปสติกมีสารสกัดมากมายเพื่อช่วยบำรุงริมฝีปากให้ชุ่มชื้นและไม่แห้ง',
                'price' =>'1700',
                'remaining'=>'4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'19',
                'name'=>'Kiko Milano Unlimited Double Touch',
                'details'=>'ติดทนนานมากพิเศษ ทานข้าวไม่หลุดและไม่ติดแมสก์ตลอดวัน',
                'price' =>'649',
                'remaining'=>'3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'products_code'=>'20',
                'name'=>'Muzigae Mansion Object Liquid',
                'details'=>'เนื้อลิปสติกเนียนนุ่ม ทาง่ายและเรียบลื่นไปกับริมฝีปากอย่างแนบเนียน',
                'price' =>'690',
                'remaining'=>'8',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลโปรเจค - ระบบเช็คชื่อนักเรียน</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Sarabun', 'Tahoma', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 500px;
            width: 100%;
        }
        h1 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 24px;
            text-align: center;
            border-bottom: 3px solid #667eea;
            padding-bottom: 12px;
        }
        .info-row {
            margin-bottom: 16px;
            padding: 12px 16px;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }
        .label {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 4px;
        }
        .value {
            font-size: 1.1rem;
            color: #222;
            font-weight: 500;
        }
        .project-name {
            font-size: 1rem;
            line-height: 1.5;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>ข้อมูลโปรเจค</h1>
        
        <div class="info-row">
            <div class="label">ชื่อ-นามสกุล</div>
            <div class="value">นายณัฐวุฒิ พิมสอ</div>
        </div>
        
        <div class="info-row">
            <div class="label">รหัสนักศึกษา</div>
            <div class="value">2651032341127</div>
        </div>
        
        <div class="info-row">
            <div class="label">สาขา</div>
            <div class="value">สาขาเทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล</div>
        </div>
        
        <div class="info-row">
            <div class="label">ชื่อโปรเจค</div>
            <div class="value project-name">ระบบการพัฒนาระบบเช็คชื่อนักเรียนและติดตามกิจกรรมในโรงเรียนผ่านเว็บไซต์</div>
        </div>
    </div>
</body>
</html>

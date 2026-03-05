# ระบบเช็คชื่อนักเรียนและติดตามกิจกรรมในโรงเรียนผ่านเว็บไซต์

- **นักพัฒนา:** นายณัฐวุฒิ พิมสอ  
- **รหัส:** 2651032341127  
- **สาขา:** เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล  

## รันด้วย Docker (Container: natthawut127)

### Build และรันด้วย Docker Compose
```bash
docker-compose up -d
```
เปิดเว็บที่: http://localhost:8080

### หรือ Build และรันด้วยคำสั่ง Docker โดยตรง
```bash
docker build -t natthawut127 .
docker run -d --name natthawut127 -p 8080:80 natthawut127
```

### หยุดและลบ Container
```bash
docker stop natthawut127
docker rm natthawut127
```

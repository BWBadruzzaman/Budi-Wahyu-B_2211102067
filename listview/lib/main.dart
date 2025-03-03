import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    final List<String> entries = <String>['A', 'B', 'C'];
    final List<int> colorCodes = <int>[600, 500, 100];

    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        appBar: AppBar(title: const Text('ListView.builder Example')),
        body: Padding(
          padding: const EdgeInsets.all(10.0),
          child: ListView(
            padding: const EdgeInsets.all(8),
            children: <Widget>[
              Container(
                height: 50,
                color: Colors.lightBlue[600],
                child: const Center(child: Text('Nama: Budi Wahyu Badruzzaman')),
              ),
              Container(
                height: 50,
                color: Colors.lightBlue[500],
                child: const Center(child: Text('NIM: 2211102067')),
              ),
              Container(
                height: 50,
                color: Colors.lightBlue[100],
                child: const Center(child: Text('Kelas: S1IF-10-02')),
              ),
            ],
          ),
        ),
      ),
    );
  }
}

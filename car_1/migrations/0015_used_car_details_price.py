# Generated by Django 3.2.8 on 2022-03-30 02:16

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('car_1', '0014_alter_suggest_details_id'),
    ]

    operations = [
        migrations.AddField(
            model_name='used_car_details',
            name='Price',
            field=models.CharField(max_length=30, null=True),
        ),
    ]